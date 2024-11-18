<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

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
        return view('profile', ['user' => $user]);
    }
}
