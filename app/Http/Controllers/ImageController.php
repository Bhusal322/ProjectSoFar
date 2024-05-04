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

        $newImage = new Image;
        $newImage->title = $request->title;
        $newImage->file_path = $path;
        $newImage->save();

        return redirect()->route('blogposts')->with('success', 'Image Uploaded Successfully.');
    }

    public function index()
    {
        $images = Image::all();
        return view('blogposts', compact('images'));
    }
}



