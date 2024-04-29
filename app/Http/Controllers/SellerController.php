<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    
public function myaccount() {

    return view('seller.myaccount');
}

public function seller() {

    return view('seller.seller');
}

public function sellerbrowse() {

    return view('seller.sellerbrowse');
}

}


