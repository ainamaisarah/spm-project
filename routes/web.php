<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

// Define the route for the main page
Route::get('/', function () {
    return view('mainpage');
});

// Define the route for the registration page
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');

// Define the route for the login page
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

// Define the middleware group for authenticated routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
