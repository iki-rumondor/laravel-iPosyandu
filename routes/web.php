<?php

use App\Http\Controllers\DataKaderController;
use App\Http\Controllers\DataPesertaController;
use App\Http\Controllers\FetchController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\KbController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\VitaminController;
use Illuminate\Support\Facades\Route;

// Route::get('/manajemen/posyandu', function () {
//     return view('welcome');
// });

Route::prefix('posyandu')->group(function () {
    Route::resource('location', LocationController::class);
    Route::resource('schedule', ScheduleController::class);
});

Route::prefix('kader')->group(function () {
    Route::resource('data', DataKaderController::class);
});


Route::prefix('peserta')->group(function () {
    Route::resource('data', DataPesertaController::class);
});

Route::prefix('obat')->group(function () {
    Route::resource('vitamin', VitaminController::class);
    Route::resource('imunisasi', ImunisasiController::class);
    Route::resource('kb', KbController::class);
});

Route::prefix('fetch')->group(function () {
    Route::get('get-posyandu/{posyandu}', [FetchController::class, 'getPosyandu']);
    Route::get('get-schedule/{schedule}', [FetchController::class, 'getSchedule']);
    Route::get('get-kader/{kader}', [FetchController::class, 'getKader']);
    Route::get('get-peserta/{peserta}', [FetchController::class, 'getPeserta']);
    Route::get('get-vitamin/{vitamin}', [FetchController::class, 'getVitamin']);
    Route::get('get-imunisasi/{imunisasi}', [FetchController::class, 'getImunisasi']);
    Route::get('get-kb/{kb}', [FetchController::class, 'getKb']);
    Route::get('set-schedules-table/{posyandu}', [FetchController::class, 'setSchedulesTable']);
});
