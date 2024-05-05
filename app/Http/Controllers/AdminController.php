<?php

namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminaccounts() {

        $persons = Person::all(); // Fetch all persons
        return view('admin.adminaccounts', compact('persons')); // Pass the persons data to the view

    }

    public function deletePerson($id)
{
    $person = Person::findOrFail($id);
    $person->delete();

    return redirect()->back()->with('success', 'Person deleted successfully.');
}


public function showPersonDetails($id)
{
    $person = Person::findOrFail($id);
    return view('person', compact('person'));
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





