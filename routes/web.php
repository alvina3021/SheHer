<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login', 'login');
Route::view('/register', 'register');


Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/register', [RegisterController::class, 'register']);

//koneksi ke home
Route::get('/home', function () {
    return view('home');
})->middleware('auth');

//logout
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');


