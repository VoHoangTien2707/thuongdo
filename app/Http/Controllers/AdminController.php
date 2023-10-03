<?php

namespace App\Http\Controllers;
use DB;
use App\Models\dichvu;
use App\Models\banggia;
use App\Models\huongdan;
use App\Models\chinhsach;
use App\Models\sukien;

use App\Models\tintuc;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;



class AdminController extends Controller
{
    function index(){
        return view('Admin.home');
    }

    function adddv(){
        return view("Admin.adddichvu");
    }

    function addbg(){
        return view("Admin.addbanggia");
    }

    function addtintuc(){
        return view("Admin.addtintuc");
    }
    function adddv_(Request $request){
        $request->validate([
            'title' => 'required|string',
            'description' => 'required',
            'content'=>'required',
        ]);
        $t = new dichvu;
        $t->title = $request->input('title');
        $t->description = $request->input('description');
        $t->content = $request->input('content');

        // if ($request->hasFile('img')) {
        //     // Xác minh rằng hình ảnh cũ tồn tại trước khi xóa
        //     if (Storage::disk('public')->exists($t->img)) {
        //         // Xóa hình ảnh cũ
        //         Storage::disk('public')->delete($t->img);
        //     }

        //     $imagePath = $request->file('img')->store('images', 'public');
        //     $t->img = $imagePath;
        // }

        $thongbao = "thêm tin tức thành công";
        $t->save();
        return redirect('/admin/dichvu')->with('thongbao', $thongbao);
    }

    function addbg_(Request $request){
        $request->validate([
            'title' => 'required|string',
            'content'=>'required',
        ]);
        $t = new banggia;
        $t->title = $request->input('title');
        $t->content = $request->input('content');

        // if ($request->hasFile('img')) {
        //     // Xác minh rằng hình ảnh cũ tồn tại trước khi xóa
        //     if (Storage::disk('public')->exists($t->img)) {
        //         // Xóa hình ảnh cũ
        //         Storage::disk('public')->delete($t->img);
        //     }

        //     $imagePath = $request->file('img')->store('images', 'public');
        //     $t->img = $imagePath;
        // }

        $thongbao = "thêm tin tức thành công";
        $t->save();
        return redirect('/admin/banggia')->with('thongbao', $thongbao);
    }
    function addtintuc_(Request $request){
        $request->validate([
            'title' => 'required|string',
            'content'=>'required',
        ]);
        $t = new tintuc;
        $t->title = $request->input('title');
        $t->description = $request->input('description');
        $t->iddm = $request->input('iddm');

        $t->content = $request->input('content');

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

        $thongbao = "thêm tin tức thành công";
        $t->save();
        return redirect('/admin/tintuc')->with('thongbao', $thongbao);
    }


    function dichvu(){
        $data = \App\Models\dichvu::paginate(5);
        return view('Admin.tabledichvu', ['data'=>$data]);
    }

    function huongdan(){
        $data = \App\Models\huongdan::paginate(5);
        return view('Admin.tablehuongdan', ['data'=>$data]);
    }



    function tintuc(Request $request)
    {
        {
            $perPage = 5;

            // Sử dụng hàm paginate để xử lý phân trang
            $data = DB::table("tbl_tintuc")->paginate($perPage);

            // Truyền dữ liệu cho view
            return view('Admin.tabletintuc', ['data' => $data]);
        }

    }


    function sukien(Request $request)
    {
        {
            $perPage = 5;

            // Sử dụng hàm paginate để xử lý phân trang
            $data = DB::table("tbl_sukien")->paginate($perPage);

            // Truyền dữ liệu cho view
            return view('Admin.tablesukien', ['data' => $data]);
        }

    }
    function banggia(){
        $data = \App\Models\banggia::paginate(5);
        return view('Admin.tablebanggia', ['data'=>$data]);
    }

    function chinhsach(){
        $data = \App\Models\chinhsach::paginate(5);
        return view('Admin.tablechinhsach', ['data'=>$data]);
    }

    function edit($id){
        $t = dichvu::find($id);
        if($t==null) return redirect('/thongbao');
        return view('Admin.editdichvu', ['tin'=>$t]);
    }

    function edittintuc($id){
        $t = tintuc::find($id);
        if($t==null) return redirect('/thongbao');
        return view('Admin.edittintuc', ['tin'=>$t]);
    }


    function editsukien($id){
        $t = sukien::find($id);
        if($t==null) return redirect('/thongbao');
        return view('Admin.editsukien', ['tin'=>$t]);
    }

    function editbg($id){
        $t = banggia::find($id);
        if($t==null) return redirect('/thongbao');
        return view('Admin.editbanggia', ['tin'=>$t]);
    }
    function editchinhsach($id){
        $t = chinhsach::find($id);
        if($t==null) return redirect('/thongbao');
        return view('Admin.editchinhsach', ['tin'=>$t]);
    }
    function edithg($id){
        $t = huongdan::find($id);
        if($t==null) return redirect('/thongbao');
        return view('Admin.edithuongdan', ['tin'=>$t]);
    }

    function edit_(Request $request, $id) {

        $request->validate([
            'title' => 'required|string',
            'description' => 'required',
            'content' => 'required',
        ]);
        $t = dichvu::find($id);
        if ($t == null){
            $thongbao = "Sửa tin tức thất bại";

        }else{

        // Lấy dữ liệu từ request
        $t->title = $request->input('title');
        $t->description = $request->input('description');
        $t->content = $request->input('content');

        // if ($request->hasFile('img')) {
        //     // Xác minh rằng hình ảnh cũ tồn tại trước khi xóa
        //     if (Storage::disk('public')->exists($t->img)) {
        //         // Xóa hình ảnh cũ
        //         Storage::disk('public')->delete($t->img);
        //     }

        //     $imagePath = $request->file('img')->store('images', 'public');
        //     $t->img = $imagePath;
        // }

        $thongbao = "Sửa tin tức thành công";
        $t->save();
        }


        return redirect('/admin/dichvu')->with('thongbao', $thongbao);
    }

    function edittintuc_(Request $request, $id) {

        $request->validate([
            'title' => 'required|string',
            'description' => 'required',
            'content' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Kiểm tra file ảnh có đúng định dạng và kích thước không
        ]);
        $t = tintuc::find($id);
        if ($t == null){
            $thongbao = "Sửa tin tức thất bại";

        }else{

        // Lấy dữ liệu từ request
        $t->title = $request->input('title');
        $t->description = $request->input('description');
        $t->content = $request->input('content');

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
                if (Storage::disk('public')->exists($t->img)) {
                    // Xóa hình ảnh cũ
                    Storage::disk('public')->delete($t->img);
                }

                // Lưu tập tin hình ảnh mới vào thư mục public/images (bạn có thể sử dụng thư mục khác tuỳ ý)
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $t->img = $imageName;
            } else {
                // Xử lý lỗi nếu tập tin không hợp lệ
                return redirect()->back()->with('error', 'Tập tin không hợp lệ. Vui lòng tải lên hình ảnh có định dạng jpg, jpeg, png hoặc gif.');
            }
        }
        $t->iddm = $request->input('iddm');
        $thongbao = "Sửa tin tức thành công";
        $t->save();
        }


        return redirect('/admin/tintuc')->with('thongbao', $thongbao);
    }

    function editbg_(Request $request, $id) {

        $request->validate([
            'title' => 'required|string',
            'content' => 'required',
        ]);
        $t = banggia::find($id);
        if ($t == null){
            $thongbao = "Sửa tin tức thất bại";

        }else{

        // Lấy dữ liệu từ request
        $t->title = $request->input('title');
        $t->content = $request->input('content');

        // if ($request->hasFile('img')) {
        //     // Xác minh rằng hình ảnh cũ tồn tại trước khi xóa
        //     if (Storage::disk('public')->exists($t->img)) {
        //         // Xóa hình ảnh cũ
        //         Storage::disk('public')->delete($t->img);
        //     }

        //     $imagePath = $request->file('img')->store('images', 'public');
        //     $t->img = $imagePath;
        // }

        $thongbao = "Sửa tin tức thành công";
        $t->save();
        }


        return redirect('/admin/banggia')->with('thongbao', $thongbao);
    }

    function editcs_(Request $request, $id) {

        $request->validate([
            'title' => 'required|string',
            'content' => 'required',
        ]);
        $t = chinhsach::find($id);
        if ($t == null){
            $thongbao = "Sửa tin tức thất bại";

        }else{

        // Lấy dữ liệu từ request
        $t->title = $request->input('title');
        $t->content = $request->input('content');

        // if ($request->hasFile('img')) {
        //     // Xác minh rằng hình ảnh cũ tồn tại trước khi xóa
        //     if (Storage::disk('public')->exists($t->img)) {
        //         // Xóa hình ảnh cũ
        //         Storage::disk('public')->delete($t->img);
        //     }

        //     $imagePath = $request->file('img')->store('images', 'public');
        //     $t->img = $imagePath;
        // }

        $thongbao = "Sửa tin tức thành công";
        $t->save();
        }


        return redirect('/admin/chinhsach')->with('thongbao', $thongbao);
    }


    function edithg_(Request $request, $id) {

        $request->validate([
            'title' => 'required|string',
            'content' => 'required',
        ]);
        $t = huongdan::find($id);
        if ($t == null){
            $thongbao = "Sửa tin tức thất bại";

        }else{

        // Lấy dữ liệu từ request
        $t->title = $request->input('title');
        $t->content = $request->input('content');

        // if ($request->hasFile('img')) {
        //     // Xác minh rằng hình ảnh cũ tồn tại trước khi xóa
        //     if (Storage::disk('public')->exists($t->img)) {
        //         // Xóa hình ảnh cũ
        //         Storage::disk('public')->delete($t->img);
        //     }

        //     $imagePath = $request->file('img')->store('images', 'public');
        //     $t->img = $imagePath;
        // }

        $thongbao = "Sửa tin tức thành công";
        $t->save();
        }


        return redirect('/admin/huongdan')->with('thongbao', $thongbao);
    }
    function delbg($id) {
        $t = banggia::find($id);
        if ($t == null) {
            $thongbao = "Xóa tin tức thất bại";
        } else {
            $t->delete();
            $thongbao = "Xóa tin tức thành công";
        }
        return redirect('/admin/banggia')->with('thongbao', $thongbao);


    }
    function delhg($id) {
        $t = huongdan::find($id);
        if ($t == null) {
            $thongbao = "Xóa tin tức thất bại";
        } else {
            $t->delete();
            $thongbao = "Xóa tin tức thành công";
        }
        return redirect('/admin/huongdan')->with('thongbao', $thongbao);


    }
    function deldv($id) {
        $t = dichvu::find($id);
        if ($t == null) {
            $thongbao = "Xóa tin tức thất bại";
        } else {
            $t->delete();
            $thongbao = "Xóa tin tức thành công";
        }
        return redirect('/admin/dichvu')->with('thongbao', $thongbao);
    }

    function deltintuc($id) {
        $t = tintuc::find($id);
        if ($t == null) {
            $thongbao = "Xóa tin tức thất bại";
        } else {
            $t->delete();
            $thongbao = "Xóa tin tức thành công";
        }
        return redirect('/admin/tintuc')->with('thongbao', $thongbao);
    }



    function editsukien_(Request $request, $id) {

        $request->validate([
            'title' => 'required|string',
            'description' => 'required',
            'content' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Kiểm tra file ảnh có đúng định dạng và kích thước không
        ]);
        $t = sukien::find($id);
        if ($t == null){
            $thongbao = "Sửa tin tức thất bại";

        }else{

        // Lấy dữ liệu từ request
        $t->title = $request->input('title');
        $t->description = $request->input('description');
        $t->content = $request->input('content');

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
                if (Storage::disk('public')->exists($t->img)) {
                    // Xóa hình ảnh cũ
                    Storage::disk('public')->delete($t->img);
                }

                // Lưu tập tin hình ảnh mới vào thư mục public/images (bạn có thể sử dụng thư mục khác tuỳ ý)
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $t->img = $imageName;
            } else {
                // Xử lý lỗi nếu tập tin không hợp lệ
                return redirect()->back()->with('error', 'Tập tin không hợp lệ. Vui lòng tải lên hình ảnh có định dạng jpg, jpeg, png hoặc gif.');
            }
        }
        $thongbao = "Sửa tin tức thành công";
        $t->save();
        }


        return redirect('/admin/sukien')->with('thongbao', $thongbao);
    }
}
