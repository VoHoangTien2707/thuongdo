<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    function dangnhap(){
        return view('login.dangnhap');
    }

    public function login(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt([
         'email' => $request->input('email'),
         'password' => $request->input('password')
        ], $request->input('remember')
         )) {
            $user = Auth::user();
            if ($user->role === 'Admin') {
                $request->session()->put('user', $user);

                return redirect()->route('admin'); // Chuyển hướng đến trang admin dashboard
            } else if($user->role === 'User') {
                $request->session()->put('user', $user);
                return redirect()->route('trangchu'); // Chuyển hướng đến trang user dashboard
            }
            // Xác thực thành công
        } else {
            // Xác thực không thành công
            return redirect()->route('dangnhap')->with('error', 'Đăng nhập không thành công! Vui lòng kiểm tra lại email và mật khẩu.');
        }
        
    }
    function dangky(){
        return view('login.dangky');
    }
    public function register(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'password' => 'required|string|min:6',
            'kho_id' => 'required', // Thêm kiểm tra cho trường kho_id
            'manv' => 'nullable', // Đặt nhưng không bắt buộc cho trường manv
            'dichvu' => 'required', // Thêm kiểm tra cho trường dichvu
            'agree' => 'required', // Thêm kiểm tra cho trường agree
        ]);

        // Create a new user
        $user = new User();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->kho_nhan_hang = $request->kho_id;
        $user->manv = $request->manv;
        $user->dichvu = $request->dichvu;
        $user->save();
        // Redirect to login page after successful registration
        return redirect()->route('dangnhap')->with('success', 'Đăng ký thành công!');
    }
}
