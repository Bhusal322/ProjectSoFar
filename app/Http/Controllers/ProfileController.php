<?php
namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Credential;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
   
    public function myAccount()
{
    // Retrieve services, credentials, and experiences associated with the currently logged-in user
    $services = Auth::user()->services;
    $credentials = Auth::user()->credentials;
    $experiences = Auth::user()->experiences; // Load experiences as well

    // Pass services, credentials, and experiences to the view
    return view('seller.myaccount', compact('services', 'credentials', 'experiences'));
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


    public function updateService(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string'
        ]);
    
        $service = Service::find($id);
        if (!$service) {
            return redirect()->back()->with('error', 'Service not found.');
        }
    
        $service->name = $request->name;
        $service->description = $request->description;
        $service->save();
    
        return redirect()->route('seller.myaccount')->with('success', 'Service updated successfully!');
    }

    public function deleteService($id)
{
    $service = Service::find($id);
    if (!$service) {
        return redirect()->back()->with('error', 'Service not found.');
    }

    $service->delete();
    return redirect()->route('seller.myaccount')->with('success', 'Service deleted successfully!');
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


    public function updateCredential(Request $request, $id)
{
    $request->validate([
        'credential_name' => 'required|string|max:255',
        'institution_name' => 'required|string'
    ]);

    $credential = Credential::find($id);
    if (!$credential) {
        return redirect()->back()->with('error', 'Credential not found.');
    }

    $credential->credential_name = $request->credential_name;
    $credential->institution_name = $request->institution_name;
    $credential->save();

    return redirect()->route('seller.myaccount')->with('success', 'Credential updated successfully!');
}

public function deleteCredential($id)
{
    $credential = Credential::find($id);
    if (!$credential) {
        return redirect()->back()->with('error', 'Credential not found.');
    }

    $credential->delete();
    return redirect()->route('seller.myaccount')->with('success', 'Credential deleted successfully!');
}


public function storeExperience(Request $request)
{
    $request->validate([
        'job_title' => 'required|string|max:255',
        'company_name' => 'nullable|string|max:255',
        'description' => 'nullable|string'
    ]);

    $experience = new Experience();
    $experience->seller_id = Auth::id(); // Assuming 'seller_id' is the foreign key to the 'users' table
    $experience->job_title = $request->job_title;
    $experience->company_name = $request->company_name;
    $experience->description = $request->description;
    $experience->save();

    return redirect()->route('seller.myaccount')->with('success', 'Experience added successfully!');
}



public function updateExperience(Request $request, $id)
{
    $request->validate([
        'job_title' => 'required|string|max:255',
        'company_name' => 'nullable|string|max:255',
        'description' => 'nullable|string'
    ]);

    $experience = Experience::find($id);
    if (!$experience) {
        return redirect()->back()->with('error', 'Experience not found.');
    }

    $experience->job_title = $request->job_title;
    $experience->company_name = $request->company_name;
    $experience->description = $request->description;
    $experience->save();

    return redirect()->route('seller.myaccount')->with('success', 'Experience updated successfully!');
}


public function deleteExperience($id)
{
    $experience = Experience::find($id);
    if (!$experience) {
        return redirect()->back()->with('error', 'Experience not found.');
    }

    $experience->delete();
    return redirect()->route('seller.myaccount')->with('success', 'Experience deleted successfully!');
}

}








