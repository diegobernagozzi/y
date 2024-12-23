<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Post;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $imagePath = asset('/images/sawyer.jpeg');
        return view('profile', ['imagePath' => $imagePath]);
    }

    public function show($id)
    {
        $user = User::find($id);
        $posts = Post::where('user_id', $id)->get();
        $isLoggedIn = auth()->check();

        return view('profile', ['user' => $user, 'posts' => $posts, 'isLoggedIn' => $isLoggedIn]);
    }
}
