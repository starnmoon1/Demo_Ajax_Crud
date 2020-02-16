<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showFormLogin()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $data = ['email'=>$username,
                 'password'=>$password];

        if (Auth::attempt($data)) {
            return redirect('/home');
        }

        return back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
