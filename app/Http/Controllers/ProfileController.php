<?php
namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Credential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function myAccount()
    {
        // Retrieve services associated with the currently logged-in user
        $services = Auth::user()->services;
        $credentials = Auth::user()->credentials;  // Load credentials as well

        // Pass both services and credentials to the view
        return view('seller.myaccount', compact('services', 'credentials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        $service = new Service();
        $service->seller_id = Auth::id(); // Link the service to the logged-in user
        $service->name = $request->name;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('seller.myaccount')->with('success', 'Service added successfully!');
    }
   

  

    public function CredStore(Request $request)
    {
        $request->validate([
            'credential_name' => 'required|string|max:255',
            'institution_name' => 'required|string|max:255'
        ]);

        $credential = new Credential();
        $credential->seller_id = Auth::id(); // Link the credential to the logged-in user
        $credential->credential_name = $request->credential_name;
        $credential->institution_name = $request->institution_name;
        $credential->save();

        return redirect()->route('seller.myaccount')->with('success', 'Credential added successfully!');
    }

   

}








