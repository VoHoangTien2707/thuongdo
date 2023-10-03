<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dichvu;
use App\Models\Tintuc;
use App\Models\order;
use App\Models\kygui;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

use League\Flysystem\Filesystem;

use Illuminate\Support\Facades\Hash;
use DB;

class HomeController extends Controller
{
    function index(){
        $dv = DB::table("tbl_dịchvu")
        ->get();

        $tt = DB::table("tbl_tintuc")
        ->get();
        return view('Home.home', ['data'=>$dv, 'data1'=>$tt]);
    }
    function chitiet($id=0){
        $dv= DB::table('tbl_dịchvu')->where('id',$id)->first();
        $data= ['id'=>$id,'dv'=>$dv];
        return view('Home.chitietdichvu', $data);
    }
    function chitietbg($id=0){
        $dv= DB::table('tbl_banggia')->where('id',$id)->first();
        $data= ['id'=>$id,'dv'=>$dv];
        return view('Home.chitietbanggia', $data);
    }
    function chitiethg($id=0){
        $dv= DB::table('tbl_huongdan')->where('id',$id)->first();
        $data= ['id'=>$id,'dv'=>$dv];
        return view('Home.chitiethuongdan', $data);
    }

    function chitietcs($id=0){
        $dv= DB::table('tbl_chinhsach')->where('id',$id)->first();
        $data= ['id'=>$id,'dv'=>$dv];
        return view('Home.chitietchinhsach', $data);
    }
    function tracuoc(){
        return view("Home.tracuoc");
    }

    function addorder(Request $request){

        $t = new order;
        $t->tensp = $request->input('tensp');

        $t->chitietsp = $request->input('chitietsp');
        $t->link = $request->input('link');
        $t->gia = $request->input('gia');
        $t->soluong = $request->input('soluong');
        var_dump($t->gia);
        var_dump($t->soluong);

        if (is_numeric($t->gia) && is_numeric($t->soluong)) {
            $t->thanhtien = $t->gia * $t->soluong;
        } else {
            // Xử lý lỗi hoặc đặt giá trị mặc định tùy theo trường hợp của bạn.
            $t->thanhtien = 0; // Giá trị mặc định
        }
        $t->thongtin = $request->input('thongtin');
        $t->van_chuyen = $request->input('vanchuyen');

        if ($request->hasFile('img')) {
            $image = $request->file('img');

            // Kiểm tra xem tập tin tải lên có phải là hình ảnh hợp lệ (ví dụ: jpg, png, gif)
            if ($image->isValid() && in_array($image->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif'])) {


                // Lưu tập tin hình ảnh mới vào thư mục public/images (bạn có thể sử dụng thư mục khác tuỳ ý)
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $t->img = $imageName;
            } else {
                // Xử lý lỗi nếu tập tin không hợp lệ
                return redirect()->back()->with('error', 'Tập tin không hợp lệ. Vui lòng tải lên hình ảnh có định dạng jpg, jpeg, png hoặc gif.');
            }
        }
        $user = session('user');
        $iduser = $user->id;

        $totalOrderAmount = $t->thanhtien;
        $t->iduser = $iduser;
        $t->save();
        $newlyAddedOrder = order::find($t->id);

        return view('profile.chitietdh', ['data'=>$newlyAddedOrder, 'totalOrderAmount' => $totalOrderAmount]);

    }
    function sukien(){
        $perPage = 6;
        $dv = DB::table('tbl_sukien')->paginate($perPage); // Corrected line
        $data = ['dv' => $dv];
        return view('Home.sukien', $data);



}

function tuyendung(){
    $dv = DB::table('tbl_tintuc')
    ->orderBy('view','desc')
    ->limit(4)
    ->get(); // Corrected line
    $dv1 =  DB::table('tbl_tuyendung')->orderBy('created_at','desc')->paginate(10);
    $data = ['dv' => $dv,'dv1'=>$dv1];
    return view('Home.tuyendung', $data);

}


function profile($id){
    $t = User::find($id);
    if($t==null) return redirect('/thongbao');
    return view('profile.chinhsua', ['tin'=>$t]);
}

function edit_(Request $request, $id) {
    $request->validate([
        'email' => 'required',
        'name' => 'required',
        'phone' => 'required',
        'diachi' => 'required',
        'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    $t = User::find($id);
    if ($t == null){
        $thongbao = "Sửa tin tức thất bại";

    }else{

    // Lấy dữ liệu từ request
    $t->email = $request->input('email');

    $t->name = $request->input('name');
    $t->phone = $request->input('phone');
    $t->diachi = $request->input('diachi');
    $t->kho_nhan_hang = $request->input('kho_nhan_hang');


    // if ($request->hasFile('img')) {
    //     // Xác minh rằng hình ảnh cũ tồn tại trước khi xóa
    //     if (Storage::disk('public')->exists($t->img)) {
    //         // Xóa hình ảnh cũ
    //         Storage::disk('public')->delete($t->img);
    //     }

    //     $imagePath = $request->file('img')->store('images', 'public');
    //     $t->img = $imagePath;
    // }
    if ($request->hasFile('img')) {
        $image = $request->file('img');

        // Kiểm tra xem tập tin tải lên có phải là hình ảnh hợp lệ (ví dụ: jpg, png, gif)
        if ($image->isValid() && in_array($image->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif'])) {
            // Xác minh rằng hình ảnh cũ tồn tại trước khi xóa
            if ($t->img !== null && Storage::disk('public')->exists($t->img)) {
                Storage::disk('public')->delete($t->img);
            }

            // Lưu tập tin hình ảnh mới vào thư mục public/images (bạn có thể sử dụng thư mục khác tuỳ ý)
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $t->img = $imageName;
        } else {
            // Xử lý lỗi nếu tập tin không hợp lệ
        }
    }
    $thongbao = "Sửa User thành công";
    $t->save();
    }


    return redirect('/profile/' . $id)->with('thongbao', $thongbao);
}

public function logout(Request $request)
{
    Auth::logout(); // Đăng xuất người dùng
    $request->session()->invalidate(); // Xóa session hiện tại
    $request->session()->regenerateToken(); // Tạo token session mới
    return redirect()->route('trangchu'); // Chuyển hướng về trang chủ hoặc trang khác sau khi đăng xuất
}
function chodatcoc(){
    $user = session('user');
    $iduser = $user->id;
    $tt2 = 'Chờ đặt cọc';
    $tt = DB::table("tbl_order")
        ->where([
            ['iduser', $iduser],
            ['trangthai', $tt2]
        ])
        ->get();
    return view('profile.chitiet1', ['data'=>$tt]);
}

function dadathang(){
    $user = session('user');
    $iduser = $user->id;
    $tt2 = 'Đã đặt cọc';
    $tt = DB::table("tbl_order")
        ->where([
            ['iduser', $iduser],
            ['trangthai', $tt2]
        ])
        ->get();
    return view('profile.chitiet2', ['data'=>$tt]);
}

function dadathang1(){
    $user = session('user');
    $iduser = $user->id;
    $tt2 = 'Đã đặt hàng';
    $tt = DB::table("tbl_order")
        ->where([
            ['iduser', $iduser],
            ['trangthai', $tt2]
        ])
        ->get();
    return view('profile.chitiet3', ['data'=>$tt]);
}

function dongydathang($id) {

    $ww = DB::table("tbl_order")
    ->where([
        ['id', $id],
    ])
    ->first();
    $thanhtien1 = $ww->thanhtien;

    $user = session('user');
    $iduser = $user->id;
    $tien = $user->tien;
    $thanhtien = $tien - $thanhtien1;
    $trangThaiHienTai = 'Chờ đặt cọc'; // Trạng thái hiện tại cần cập nhật
    $trangThaiMoi = 'Đã đặt cọc'; // Trạng thái mới
 DB::table("users")
        ->where([
            ['id', $iduser],
        ])
        ->update(['tien' => $thanhtien]);
    // Thực hiện câu truy vấn cập nhật
    DB::table("tbl_order")
        ->where([
            ['iduser', $iduser],
            ['trangthai', $trangThaiHienTai]
        ])
        ->update(['trangthai' => $trangThaiMoi]);

    // Sau khi cập nhật xong, bạn có thể chuyển người dùng đến một trang khác hoặc thực hiện các hành động khác
$thongbao= "Bạn đã đặt hàng thành công";
    return redirect('/chodatcoc')->with('thongbao', $thongbao);
}


function addkygui(Request $request){

    $t = new kygui;
    $t->tensp = $request->input('tensp');

    $t->madon = $request->input('madon');
    $t->sokh = $request->input('sokh');
    $t->hangvc = $request->input('hangvc');
    $t->danhmuc = $request->input('danhmuc');
    $t->soluong = $request->input('soluong');
    $t->giatri = $request->input('giatri');
    $t->link = $request->input('link');
    $t->ghichu = $request->input('ghichu');
    $t->vanchuyen = $request->input('vanchuyen');
    $t->khonhanhang = $request->input('khonhanhang');
    $t->khotrahang = $request->input('khotrahang');
    $t->diachi = $request->input('diachi');


    if ($request->hasFile('img')) {
        $image = $request->file('img');

        // Kiểm tra xem tập tin tải lên có phải là hình ảnh hợp lệ (ví dụ: jpg, png, gif)
        if ($image->isValid() && in_array($image->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif'])) {


            // Lưu tập tin hình ảnh mới vào thư mục public/images (bạn có thể sử dụng thư mục khác tuỳ ý)
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $t->img = $imageName;
        } else {
            // Xử lý lỗi nếu tập tin không hợp lệ
            return redirect()->back()->with('error', 'Tập tin không hợp lệ. Vui lòng tải lên hình ảnh có định dạng jpg, jpeg, png hoặc gif.');
        }
    }
    $user = session('user');
    $iduser = $user->id;

    $t->iduser = $iduser;
    $t->save();
    $newlyAddedOrder = kygui::find($t->id);

    return view('profile.chitietkh', ['data'=>$newlyAddedOrder]);

}
function editkh($id){
    $t = kygui::find($id);
    if($t==null) return redirect('/thongbao');
    return view('profile.chitietvekh', ['tin'=>$t]);
}

function tatcadonhang(){
    $user = session('user');
    $iduser = $user->id;
    $tt2 = 'Chờ đặt cọc';

    $tt = DB::table("tbl_order")
    ->where([
        ['iduser', $iduser],
        ['trangthai', $tt2]
    ])
    ->get();
    return view('profile.chitietdhmacdinh', ['data'=>$tt]);

}

function tatcakh(){
    $user = session('user');
    $iduser = $user->id;
    $tt2 = 'Chờ xử lý';

    $tt = DB::table("tbl_kygui")
    ->where([
        ['iduser', $iduser],
        ['trangthai', $tt2]
    ])
    ->get();
    return view('profile.chitietkh1', ['data'=>$tt]);

}

function dangxulykh(){
    $user = session('user');
    $iduser = $user->id;
    $tt2 = 'Đang xử lý';

    $tt = DB::table("tbl_kygui")
    ->where([
        ['iduser', $iduser],
        ['trangthai', $tt2]
    ])
    ->get();
    return view('profile.chitietkh1', ['data'=>$tt]);

}


function dahoanthanhkh(){
    $user = session('user');
    $iduser = $user->id;
    $tt2 = 'Đã hoàn thành';

    $tt = DB::table("tbl_kygui")
    ->where([
        ['iduser', $iduser],
        ['trangthai', $tt2]
    ])
    ->get();
    return view('profile.chitietkh1', ['data'=>$tt]);

}



function searchkh(Request $request){
    $user = session('user');
    $iduser = $user->id;
    $trangthai = $request->input('trangthai');
    $khonhanhang = $request->input('khonhanhang');
    $madon = $request->input('madon');
    $monthTo = $request->input('month_to')['date'];
    $monthEnd = $request->input('month_end')['date'];
    $startDate = date('Y-m-d H:i:s', strtotime($monthTo . ' 00:00:00'));
    $endDate = date('Y-m-d H:i:s', strtotime($monthEnd . ' 23:59:59'));
    // Sau đó, bạn có thể sử dụng $startDate và $endDate trong truy vấn của bạn
    $tt = DB::table("tbl_kygui")
        ->where([
            ['trangthai', 'like', '%' . $trangthai . '%'],
            ['khotrahang', 'like', '%' . $khonhanhang . '%'],
            ['madon', 'like', '%' . $madon . '%'],
            ['iduser', $iduser],
        ])
        ->whereBetween('created_at', [$startDate, $endDate])
        ->get();
    return view('profile.chitietkh1', ['data'=>$tt]);

}
}
