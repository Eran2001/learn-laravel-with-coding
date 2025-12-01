<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('welcome');
});

// About page
Route::get('/about', function () {
    return view('welcome');
});

// Contact page
Route::get('/contact', function () {
    return view('contact');
});
