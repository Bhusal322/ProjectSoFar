<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

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

    public function update(Request $request) {
        // Validate the incoming request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type' => 'required|in:buyer,seller',
        ]);
    
        // Get the authenticated user's ID
        $userId = auth()->id();
    
        // Update user details
        Person::where('id', $userId)->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'type' => $request->input('type'),
        ]);
    
        // Redirect back to the profile page with a success message
        return redirect()->route('buyer.myaccount')->with('success', 'Profile updated successfully');
    }
    
}
