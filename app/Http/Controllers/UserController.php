<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // 1. Lấy danh sách tài nguyên (Danh sách người dùng) OK
    public function index()
    {
        $users = User::all();
        return view('admin.user', compact('users'));
    }

    // 2. Hiển thị form tạo mới tài nguyên (Form thêm người dùng) OK
    public function create()
    {
        return view('admin.user.create');
    }

    // 3. Lưu tài nguyên mới vào database (Thêm người dùng vào DB) OK
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:user,admin',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.user.index');
    }

    // 4. Hiển thị một tài nguyên cụ thể (Chi tiết người dùng) OK
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    // 5. Hiển thị form chỉnh sửa tài nguyên (Form sửa người dùng)
    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    // 6. Cập nhật tài nguyên trong database (Cập nhật người dùng) OK
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'required|string|in:user,admin',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.user.index');
    }

    // 7. Xoá tài nguyên khỏi database (Xoá người dùng) OK
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index');
    }
    ///////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////
    public function userShow($id)
    {
        $user = User::findOrFail($id);
        return view('user.userShow', compact('user'));
    }

    public function userEdit($id)
    {
        $user = User::findOrFail($id);
        return view('user.userEdit', compact('user'));
    }

    public function userUpdate(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);
        return redirect()->route('user.show', $user->id)->with('success', 'User updated successfully');


    }

    public function userDestroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('login')->with('success', 'User deleted successfully');
    }
}
