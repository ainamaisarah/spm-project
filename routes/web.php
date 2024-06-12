<?php

use Illuminate\Support\Facades\Route;

// Define the route for the main page
Route::get('/', function () {
    return view('mainpage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    echo "News Today";
});

// Define the middleware group for authenticated routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',

])->group(function () {
    Route::get('/dashboard', function () {
        return view('chapter.new');
    })->middleware(['auth','verified'])->name('dashboard');
});

