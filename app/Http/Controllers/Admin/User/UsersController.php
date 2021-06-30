<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Model\Roles;
use App\Model\User;
use App\Model\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.pages.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Roles::all();
        return view('admin.pages.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:50|confirmed',
        ], [
            'first_name.required' => 'Không được để trống',
            'last_name.required' => 'Không được để trống',
            'email.required' => 'Không được để trống',
            'password.required' => 'Không được để trống',
            'password.confirmed' => 'Mật khẩu không khớp',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại'
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->email_verified_at = now();
        $user->save();

        if ($request->hasFile('fileToUpload')){
            $image_src = saveFile($request->file('fileToUpload'), 'user/' . date('Y/m/d'));
            $user->image = $image_src;
            $user->save();
        }
        $verified_user = new VerifyUser();
        $verified_user->token = Str::random(60);
        $verified_user->user_id = $user->id;
        $verified_user->save();

        $user->roles()->sync($request->role_id);
//        saveLog(auth()->user()->id, 'Tạo 1 người dùng mới');
        return redirect()->route('Users');
    }

    public function edit($id)
    {
        $roles = Roles::all();
        $user = User::find($id);
        return view('admin.pages.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,'. $id
        ], [
            'first_name.required' => 'Không được để trống',
            'last_name.required' => 'Không được để trống',
            'email.required' => 'Không được để trống',
            'email.email' => 'Email không đúng định dạng'
        ]);

        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;

        $user->save();

        if ($request->password){
            $request->validate([
                'password' => 'min:8|max:255|confirmed',
            ], [
                'password.confirmed' => 'Mật khẩu không giống nhau',
            ]);

            $user->password = bcrypt($request->password);
            $user->save();
        }
        if ($request->hasFile('fileToUpload')){
            $image_src = saveFile($request->file('fileToUpload'), 'user/' . date('Y/m/d'));
            $user->image = $image_src;
            $user->save();
        }
        $user->roles()->sync($request->role_id);
//        saveLog(auth()->user()->id, 'Sửa 1 người dùng');
        return redirect()->route('Users');
    }

    public function destroy($id)
    {
        User::destroy($id);
//        saveLog(auth()->user()->id, 'Xóa 1 người dùng');
        return redirect()->route('user');
    }
}
