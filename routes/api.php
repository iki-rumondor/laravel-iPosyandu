<?php

use App\Http\Controllers\Api\ApiKaderController;
use App\Http\Controllers\Api\ApiKbController;
use App\Http\Controllers\Api\ApiPesertaController;
use App\Http\Controllers\Api\ApiScheduleController;
use App\Http\Controllers\Api\ApiVitaminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('peserta', ApiPesertaController::class)->parameters([
    'peserta' => 'peserta'
]);

Route::apiResource('kader', ApiKaderController::class)->parameters([
    'kader' => 'kader'
]);

Route::apiResource('vitamin', ApiVitaminController::class)->parameters([
    'vitamin' => 'vitamin'
]);

Route::apiResource('kb', ApiKbController::class)->parameters([
    'kb' => 'kb'
]);

Route::apiResource('schedule', ApiScheduleController::class)->parameters([
    'schedule' => 'schedule'
]);