<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|max:2048'  // 2MB Max
        ]);

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('images', $filename, 'public');

        $image = new Image;
        $image->title = $request->title;
        $image->file_path = $path;
        $image->save();

        return redirect()->back()->with('success', 'Image Uploaded Successfully.');
    }
}

