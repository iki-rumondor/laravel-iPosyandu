<?php

use App\Http\Controllers\Api\ApiKaderController;
use App\Http\Controllers\Api\ApiPesertaController;
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