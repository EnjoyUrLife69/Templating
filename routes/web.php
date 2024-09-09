<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;

use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(

);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('layouts.backend');
    });
    // untuk Route Backend Lainnya
});

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::resource('user', UserController::class)->middleware(IsAdmin::class);
});

Route::resource('kategori', KategoriController::class);

