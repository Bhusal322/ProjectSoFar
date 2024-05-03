<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BlogController extends Controller
{
    public function createPost(Request $request) {
        // Check if user is authenticated
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You need to be logged in to create a post');
        }

        // Validation
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Create the post
        Post::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Post created successfully');
    }

    public function showPosts() {
        $posts = Post::latest()->get();
        return view('blogposts', compact('posts'));
    }
}
