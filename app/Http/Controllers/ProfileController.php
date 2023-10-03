<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nganhang;
use Illuminate\Support\Facades\Validator;
use App\Models\ruttien;
use App\Models\nhacungcap;

use App\Models\User;
use App\Models\order;

use DB;

class ProfileController extends Controller
{
    function index(){
        return view("profile.profile");
    }

    function taodonhang(){
        return view("profile.taodonhang");

    }

    function khieunai(){
        return view("profile.khieunai");
    }

    function addncc(){
        return view("profile.addncc");
    }
    function ruttien(){
        $user = session('user');
        $iduser = $user->id;
        $nh = DB::table("tbl_nganhang")
        ->where('iduser',$iduser)
        ->get();
        return view("profile.ruttien",['data'=>$nh]);

    }

    function ncc(){
        $user = session('user');
        $iduser = $user->id;
        $nh1 = DB::table("tbl_order")
        ->where('iduser',$iduser)
        ->first();
        $idorder = $nh1->id;
        $nh = DB::table("tbl_nhacungcap")
        ->where('idorder',$idorder)
        ->get();
        return view("profile.ncc",['data'=>$nh, 'data1'=>$nh1]);

    }
    function taodonkygui(){
        return view("profile.kygui");

    }

    function chuyentien(request $request){
        $request->validate([
            'nganhang' => 'required|string',
            'thongtin'=>'required',
        ]);
        $t = new nganhang;
        $user = session('user');
    $iduser = $user->id;
    $t->iduser=$iduser;
        $t->nganhang = $request->input('nganhang');
        $t->thongtin = $request->input('thongtin');

        // if ($request->hasFile('img')) {
        //     // Xác minh rằng hình ảnh cũ tồn tại trước khi xóa
        //     if (Storage::disk('public')->exists($t->img)) {
        //         // Xóa hình ảnh cũ
        //         Storage::disk('public')->delete($t->img);
        //     }

        //     $imagePath = $request->file('img')->store('images', 'public');
        //     $t->img = $imagePath;
        // }

        $thongbao = "thêm  thành công";
        $t->save();
        return redirect('/ruttien')->with('thongbao', $thongbao);
    }

    public function luuthongtinchuyenkhoan(Request $request) {
        $accounts = $request->all();

        $user = session('user');
        $iduser = $user->id;
        $user = User::find($iduser);

        $sotien = $user->tien;

            $nganhang = $accounts['ttnganhang'];
            $thongtin = $accounts['ttthongtin'];
            $sotienrut = (int)$accounts['total'];

if($sotienrut < 20000){
    $thongbao = "Số tiền rút tối thiểu 20.000đ";
    return redirect('/ruttien')->with('thongbao', $thongbao);
}else{
    if($sotienrut <= $sotien ){
        $taiKhoan = new ruttien;
        $taiKhoan->tknganhang = $nganhang;
        $taiKhoan->thongtin = $thongtin;
        $taiKhoan->sotienrut = $sotienrut;
        $taiKhoan->iduser = $iduser;
        $taiKhoan->save();

    // Trả về phản hồi (nếu cần)
    $thongbao = "Đã gửi phàn hồi rút tiền thành công, vui lòng chờ ít phút để xác nhận";

    return redirect('/ruttien')->with('thongbao', $thongbao);

    }else{
        $thongbao = "Số tiền rút phải nhỏ hoặc bằng số tiền trong ví";
        return redirect('/ruttien')->with('thongbao', $thongbao);
    }
}

    }


    function lichsu(){
        $user = session('user');
        $iduser = $user->id;
        $nh = DB::table("tbl_ruttien")
        ->where('iduser',$iduser)
        ->get();
        return view("profile.lichsugiaodich",['data'=>$nh]);

    }

    function addncc_(Request $request){

        $t = new nhacungcap;
        $t->tenncc = $request->input('tenncc');

        $t->diachi = $request->input('diachi');
        $t->website = $request->input('website');
        $t->nganhkinhdoanh = $request->input('nganhkinhdoanh');
        $t->thongtin = $request->input('thongtin');
        $t->nguoidaidien  = $request->input('nguoidaidien');
        $t->lienhe = $request->input('lienhe');
        $t->chucvu = $request->input('chucvu');
        $t->nganhang = $request->input('nganhang');
        $t->stk = $request->input('stk');
        $t->chutaikhoan = $request->input('chutaikhoan');


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
        $t->save();
$thongbao = "Thêm nhà cung cấp thành công, vui lòng chờ xác nhận";
return redirect('/addncc')->with('thongbao', $thongbao);

    }
}
