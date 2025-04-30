<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::view('/register', 'register')->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::view('/login', 'login')->name('login');

Route::view('dashboard', 'dashboard')->name('dashboard');

Route::view('profile', 'profile')->name('profile');
