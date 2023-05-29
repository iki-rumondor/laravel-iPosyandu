<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KbController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FetchController;
use App\Http\Controllers\VitaminController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\DataKaderController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\DataPesertaController;


Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'viewLogin']);
    Route::prefix('auth')->group(function () {
        Route::get('login', [AuthController::class, 'viewLogin'])->name('login');
        Route::get('register', [AuthController::class, 'viewRegister']);
        Route::get('logout', [AuthController::class, 'logout'])->withoutMiddleware('guest');
        Route::post('login', [AuthController::class, 'login']);
        Route::post('register', [AuthController::class, 'register']);
    });
});

Route::middleware('auth')->group(function () {
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
});
