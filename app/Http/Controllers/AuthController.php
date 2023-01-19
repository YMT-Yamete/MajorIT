<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showSigninPage() {
        return view('Auth.signin');
    }

    public function showSignupPage() {
        return view('Auth.signup');
    }

    public function signin(Request $request) {
        
    }
}
