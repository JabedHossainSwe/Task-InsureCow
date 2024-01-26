<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['web'])->group(function () {
    Route::middleware(['CheckAdmin:admin'])->group(function () {
        Route::resource('products', ProductController::class);
    });

    Route::middleware(['CheckUserRole:user'])->group(function () {
        Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    });

    Route::middleware(['CheckUserRole:admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    });
});
