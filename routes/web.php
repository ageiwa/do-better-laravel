<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

Route::get('/', [AdsController::class, 'index'])->name('index');

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home/add-category', [CategoryController::class, 'showAddCategoryForm'])->name('category.add');
Route::post('/home/category-list', [CategoryController::class, 'addCategory'])->name('category.store');

Route::get('/home/add', [HomeController::class, 'showAddAdsForm'])->name('ads.add');
Route::post('/home', [HomeController::class, 'storeAds'])->name('ads.store');