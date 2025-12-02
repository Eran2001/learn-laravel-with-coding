<?php

    use App\Http\Controllers\BookController;
    use Illuminate\Support\Facades\Route;


    Route::get('/', function () {
        return view('welcome');
    });


    Route::get('/about', function () {
        return view('welcome');
    });

    Route::get('/contact', function () {
        return view('contact');
    });



    Route::get('/books', [BookController::class, 'index']);
