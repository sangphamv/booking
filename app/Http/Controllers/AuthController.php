<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // 1. Lấy danh sách tài nguyên (Danh sách người dùng)
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // 2. Hiển thị form đăng nhập (Form đăng nhập)
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role === 'admin') {
                return redirect()->intended('admin/dashboard')->with('success', 'Đăng nhập tài khoản thành công.');
            }

            return redirect()->intended('user/dashboard')->with('success', 'Đăng nhập tài khoản thành công.');
        }

        return back()->with('error', 'Đăng nhập tài khoản thất bại.');
    }

    // 3. Hiển thị form đăng ký (Form đăng ký)
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // 4. Lưu tài nguyên mới vào database (Đăng ký)
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->input('role', 'user'),
        ]);

        Auth::login($user);

        if ($user->role === 'user') {
            return redirect()->intended('user/dashboard')->with('success', 'Đăng ký tài khoản thành công.');
        }

        return redirect()->route('register')->with('error', 'Đăng ký tài khoản thất bại.');
    }

    // 5. Xóa tài nguyên khỏi database (Đăng xuất)
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('logout', 'Đăng xuất tài khoản thành công.');
    }

    // 6. Hiển thị trang dashboard cho admin
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    // 7. Hiển thị trang dashboard cho user
    public function userDashboard()
    {
        return view('user.dashboard');
    }
}
