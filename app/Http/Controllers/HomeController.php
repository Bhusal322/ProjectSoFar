<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function blogposts() {
        return view('blogposts');
    }

    public function login() {
        return view('login');
    }
}
