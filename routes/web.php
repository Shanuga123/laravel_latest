<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Add this route for login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
