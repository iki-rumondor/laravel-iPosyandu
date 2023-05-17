<?php

use App\Http\Controllers\FetchController;
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;

// Route::get('/manajemen/posyandu', function () {
//     return view('welcome');
// });

Route::resource('/posyandu/location', LocationController::class);

Route::get('/fetch/getPosyandu/{posyandu}', [FetchController::class, 'getPosyandu']);