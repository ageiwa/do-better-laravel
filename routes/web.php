<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

Route::get('/', [AdsController::class, 'index'])->name('index');

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');