<?php

    use App\Http\Controllers\PostController;
    use Illuminate\Support\Facades\Route;


    Route::get('/', function () {
        return view('pages.home');
    });

    Route::resource('posts',PostController::class);

