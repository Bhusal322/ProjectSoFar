<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('blogposts');
        }

        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    return redirect()->route('home');
}

}



