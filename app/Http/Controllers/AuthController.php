<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    
    public function register()
    {
        return view('auth.register');
    }

    public function registerAction(RegisterRequest $request)
    {
        dd($request->all());
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }
}
