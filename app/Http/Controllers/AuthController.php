<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // dd($request->all());

        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard');
        }

        return redirect('/login');

    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
