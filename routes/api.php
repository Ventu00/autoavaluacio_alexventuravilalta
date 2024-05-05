<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuarisController;
use App\Http\Controllers\Api\Resultats_aprenentatge;
use App\Http\Controllers\Api\CriterisAutoavaluacioController;
use App\Http\Controllers\Api\ModulsController;
use App\Http\Controllers\Api\CicleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('usuari',UsuarisController::class);
Route::apiResource('resultats',Resultats_aprenentatge::class);
Route::apiResource('criteris',CriterisAutoavaluacioController::class);
Route::apiResource('moduls',ModulsController::class);
Route::apiResource('cicle',CicleController::class);

// Route::apiResource('resultats',ResultatsAprenentatgeController::class);

