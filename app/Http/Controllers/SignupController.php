<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function store(Request $request)
    {
        // Validate user input
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'type' => 'required|in:buyer,seller',
            'newPassword' => 'required|string',
            //'confirmPassword' => 'required|string|same:newPassword',
        ]);

        // Hash the password
        $hashedPassword = Hash::make($validatedData['newPassword']);

        // Create new user
        $user = Person::create([
            'first_name' => $validatedData['firstName'],
            'last_name' => $validatedData['lastName'],
            'email' => $validatedData['email'],
            'type' => $validatedData['type'],
            'password' => $hashedPassword,
        ]);
           
        return redirect()->route('login')->with('success', 'User created successfully');
    }
}



