<?php
namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function show($id)
    {
        $photo = Photo::findOrFail($id);
        $pathToFile = public_path('images/' . $photo->name);
        return response()->file($pathToFile);
    }
    
}  
    
    
    
    
    
    


    
