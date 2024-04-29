<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function buyer() {

        return view('buyer.buyer');
    }

    public function myaccountbuyer() {

        return view('buyer.myaccountbuyer');
    }

    public function myprojects() {

        return view('buyer.myprojects');
    }

    public function searchbuyer() {

        return view('buyer.searchbuyer');
    }
}
