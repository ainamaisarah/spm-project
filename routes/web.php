<?php

use Illuminate\Support\Facades\Route;

// Define the route for the main page
Route::get('/', function () {
    return view('mainpage');
});

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
