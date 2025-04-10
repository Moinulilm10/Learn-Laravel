<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return view('home');
});

Route::view('user-form', 'user-form');

Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/server', ProvisionServer::class);




Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
});




// group routes
Route::domain('{company}.myblog.com')->group(function () {

    // Admin routes with auth middleware, prefix and naming
    Route::prefix('admin')
        ->name('admin.')
        ->middleware('auth')
        ->group(function () {

            // Grouped controller routes
            Route::controller(PostController::class)->group(function () {
                Route::get('/posts', 'index')->name('posts.index');
                Route::post('/posts', 'store')->name('posts.store');
            });

            Route::controller(UserController::class)->group(function () {
                Route::get('/users', 'index')->name('users.index');
            });
        });
});
