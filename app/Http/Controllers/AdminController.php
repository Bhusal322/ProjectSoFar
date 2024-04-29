<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminaccounts() {

        return view('admin.adminaccounts');

    }

    public function adminhome() {

        return view('admin.adminhome');

    }

    public function adminmyaccount() {

        return view('admin.adminmyaccount');

    }

    public function adminposts() {

        return view('admin.adminposts');

    }
}


