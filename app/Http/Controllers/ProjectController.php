<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'timelines' => 'nullable|string',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate each photo
        ]);

        // Associate the project with the authenticated buyer
        $validatedData['buyer_id'] = auth()->id();

        // Create the project
        $project = Project::create($validatedData);

        // Handle file uploads
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('photos'); // Store the photo in the 'photos' directory
                $project->photos()->create(['path' => $path]); // Associate the photo with the project
            }
        }

        return redirect()->route('buyer.myprojects')->with('success', 'Project created successfully');
    }
}


