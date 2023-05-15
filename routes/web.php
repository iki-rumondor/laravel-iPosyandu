<?php

use App\Http\Controllers\PosyanduController;
use Illuminate\Support\Facades\Route;

// Route::get('/manajemen/posyandu', function () {
//     return view('welcome');
// });

Route::resource('/manajemen/posyandu', PosyanduController::class);