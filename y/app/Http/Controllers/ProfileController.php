<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $imagePath = asset('/images/sawyer.jpeg');
        return view('profile', ['imagePath' => $imagePath]);
    }
}
