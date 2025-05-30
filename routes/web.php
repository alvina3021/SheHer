<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/register', [RegisterController::class, 'register']);

