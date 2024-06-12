<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReflectionController;

// Define the route for the main page
Route::get('/', function () {
    return view('mainpage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    return view('mainpage');
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

Route::get('/reflections', [ReflectionController::class, 'index'])->name('reflections.index');
Route::get('/reflections/create', [ReflectionController::class, 'create'])->name('reflections.create');
Route::post('/reflections', [ReflectionController::class, 'store'])->name('reflections.store');

