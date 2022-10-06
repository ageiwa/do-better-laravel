<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;

Route::get('/', [AdsController::class, 'index'])->name('index');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
