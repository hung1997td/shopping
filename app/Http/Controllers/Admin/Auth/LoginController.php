<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Model\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function create()
    {
        session()->forget('email_resend');
        session()->forget('resent');
        return view('admin.pages.auth.login');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],
            [
                'email.required' => 'Không được để trống',
                'email.email' => 'Email không đúng định dạng'
            ]);
        $credential = $request->only('email', 'password');

//        $remember = $request->has('remember');
        if (Auth::attempt($credential)){
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
