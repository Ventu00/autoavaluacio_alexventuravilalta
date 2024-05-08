<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoggedUser;
use App\Http\Controllers\Api\CicleController;
use App\Http\Controllers\Api\ModulsController;
use App\Http\Controllers\Api\UsuarisController;
use App\Http\Controllers\Api\RubriquesController;
use App\Http\Controllers\Api\Resultats_aprenentatge;
use App\Http\Controllers\Api\CriterisAutoavaluacioController;

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

Route::put('criteris/actualizarNota/user/{usuaris_id}/criteris/{criteris_avaluacio_id}', [CriterisAutoavaluacioController::class, 'actualizarNota']);
Route::post('moduls/matricular/user/{usuaris_id}/moduls/{moduls_id}', [ModulsController::class, 'matricular']);
Route::post('moduls/desmatricular/user/{usuaris_id}/moduls/{moduls_id}', [ModulsController::class, 'desmatricular']);

Route::get('/usuarios/{usuario}/modulos', [UsuarisController::class, 'modulosMatriculados']);
Route::get('/modulos/{moduloId}/rubricas', [RubriquesController::class, 'getRubricasByModulo']);

// Route::get('/logged-user', [LoggedUser::class, 'getLoggedUser']);


Route::middleware('auth:sanctum')->get('/logged-user', [LoggedUser::class, 'getLoggedUser']);


// Route::get('usuari/usuarisModuls/user/{moduls_id}/usuari/{usuari_id}', [UsuarisController::class, 'usuarisModuls']);


Route::apiResource('usuari',UsuarisController::class);
Route::apiResource('resultats',Resultats_aprenentatge::class);
Route::apiResource('criteris',CriterisAutoavaluacioController::class);
Route::apiResource('moduls',ModulsController::class);
Route::apiResource('cicle',CicleController::class);

// Route::apiResource('resultats',ResultatsAprenentatgeController::class);

