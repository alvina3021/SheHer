<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

//Route::get('/', function () {
    //return view('welcome');
//});

//Route::get('/', function () {
   // return view('home'); // Ganti dari welcome ke home
//});

// routes/web.php

Route::get('/', [HomeController::class, 'index']);

//Route::view('/login', 'login');
//Route::view('/register', 'register');


//Route::post('/login', [LoginController::class, 'login'])->name('login');

//Route::post('/register', [RegisterController::class, 'register']);

//koneksi ke home
//Route::get('/home', function () {
    //return view('home');
//})->middleware('auth');



