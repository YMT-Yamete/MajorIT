<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showSigninPage()
    {
        return view('Auth.signin');
    }

    public function showSignupPage()
    {
        return view('Auth.signup');
    }

    public function signin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth()->user()->role == 'User') {
                return redirect('/');
            } else {
                return redirect('/admin');
            }
        } else {
            session()->flash('alertClass', 'btn-danger');
            return back()->with('msg', 'The provided credentials do not match our records.');
        }
    }

    public function signup(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required'],
            'age' => 'required|numeric|min:10|max:80',
            'gender' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'age' => $request->age,
            'gender' => $request->gender,
            'role' => 'User',
        ]);
        $request->session()->regenerate();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        } else {
            session()->flash('alertClass', 'btn-danger');
            return back()->with('msg', 'Sign Up Failed');
        }
    }

    public function signout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/signin');
    }
}
