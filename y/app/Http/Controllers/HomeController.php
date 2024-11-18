<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $randomUsers = User::inRandomOrder()->limit(3)->get();
        $imagePath = asset('/images/sawyer.jpeg');
        return view('home', ['randomUsers' => $randomUsers, 'imagePath' => $imagePath]);
    }

    public function show()
    {
        $imagePath = asset('images/profile.jpg');
        return view('home', compact('imagePath'));
    }
}
