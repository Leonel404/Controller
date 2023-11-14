<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::resource('/user',UserController::class);
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/', [HomeController::class, 'index'])->name('dashboard');