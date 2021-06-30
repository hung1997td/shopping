<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Mail\verifyEmail;
use App\Model\User;
use App\Model\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function create()
    {
        return view('admin.pages.auth.register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
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
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $verified_user = new VerifyUser();
        $verified_user->token = Str::random(60);
        $verified_user->user_id = $user->id;
        $verified_user->save();

        Mail::to($user->email)->send(new verifyEmail($user));
        session()->put('email_resend', $user->email);
        return redirect()->route('resend');
    }
}
