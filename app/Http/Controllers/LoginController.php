<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $user = $request->validate([
            'email' => 'required',
            'password' => 'required|min:10'
        ]);

        if (Auth::attempt($user)) {
            $member = auth()->user();
            return redirect()->route('user.show' , $member)->with('notice' , '登入成功');
        } else {
            return redirect()->route('login')->withErrors('帳號或密碼錯誤，請重新輸入');
        }
    }
}
