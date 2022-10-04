<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/reg', function () {
//     return 'Register';
// });

Route::get('/', [AdsController::class, 'index'])->name('index');
