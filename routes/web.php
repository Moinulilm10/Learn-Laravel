<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProvisionServer;



Route::get('/', function () {
    return view('home');
});

Route::view('user-form', 'user-form');

Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/server', ProvisionServer::class);
