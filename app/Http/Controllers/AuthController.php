<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('user.all');
        }
        Session::flash('error', 'Email hoặc Mật khẩu không đúng!');
		return redirect()->route('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
