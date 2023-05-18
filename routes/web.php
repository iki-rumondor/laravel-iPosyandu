<?php

use App\Http\Controllers\FetchController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;

// Route::get('/manajemen/posyandu', function () {
//     return view('welcome');
// });

Route::prefix('posyandu')->group(function () {
    Route::resource('location', LocationController::class);
    Route::resource('schedule', ScheduleController::class);
    
});

Route::prefix('fetch')->group(function () {
    Route::get('get-posyandu/{posyandu}', [FetchController::class, 'getPosyandu']);
    Route::get('get-schedule/{schedule}', [FetchController::class, 'getSchedule']);
    Route::get('set-schedules-table/{posyandu}', [FetchController::class, 'setSchedulesTable']);
});
