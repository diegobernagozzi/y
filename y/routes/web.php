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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/example', function () {
    return view('example');
});

//pagina del profilo
Route::get('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');

//registrazione nuovo utente
Route::get('register', [App\Http\Controllers\RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [App\Http\Controllers\RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [App\Http\Controllers\SessionController::class, 'create'])->middleware('guest');
Route::post('login', [App\Http\Controllers\SessionController::class, 'store'])->middleware('guest');
Route::post('logout', [App\Http\Controllers\SessionController::class, 'destroy'])->middleware('auth');

//login



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
