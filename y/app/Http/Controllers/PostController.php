<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'body' => 'required|string'
        ]);

        $attributes['user_id'] = Auth::id();
        

        $post = Post::create($attributes);

        $post->load('user');

        return response()->json(['message' => 'Post created successfully', 'post' => $post], 201);
    }

    public function show()
    {
        return Post::with('user')->paginate(10);
    }
}
