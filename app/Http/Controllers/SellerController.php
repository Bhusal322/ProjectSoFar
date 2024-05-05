<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;


class SellerController extends Controller
{
    
public function myaccount() {

    return view('seller.myaccount');
}

public function seller() {

    return view('seller.seller');
}

public function sellerbrowse(Request $request) {
    // Check if a search query is provided
    $search = $request->input('search');

    if (!empty($search)) {
        // Fetch projects where the project title matches the search term
        $projects = Project::where('title', 'like', '%' . $search . '%')->with('buyer')->get();
    } else {
        // Fetches all projects with buyer information if no search term is provided
        $projects = Project::with('buyer')->get();
    }

    return view('seller.sellerbrowse', compact('projects'));
}

}


