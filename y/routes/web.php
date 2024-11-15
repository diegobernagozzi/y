<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $imagePath = asset('/images/sawyer.jpeg');
    return view('home', ['imagePath' => $imagePath]);
});



Route::get('/example', function () {
    return view('example');
});

//pagina del profilo
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
