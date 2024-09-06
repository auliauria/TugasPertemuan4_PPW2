<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'John Doe',
        'email' => 'JohnD@gmail.com'
    ]);
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/coba', [CobaController::class, 'index']);