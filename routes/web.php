<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('user', [UserController::class, 'getUser']);
// Route::get('user/about', [UserController::class, 'aboutUser']);
// Route::get('user/{name}', [UserController::class, 'getUserName']);

Route::view('/about', "about");
