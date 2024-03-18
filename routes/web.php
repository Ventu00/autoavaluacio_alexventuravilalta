<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CicleController;
use App\Http\Controllers\ModulsController;
use App\Http\Controllers\UsuarisController;
use App\Http\Controllers\RubriquesController;
use App\Http\Controllers\TipusUsuarisController;
use App\Http\Controllers\CriterisAutoavaluacioController;
use App\Http\Controllers\ResultatsAprenentatgeController;

Route::resource('cicle', CicleController::class);
Route::resource('criteris', CriterisAutoavaluacioController::class);
Route::resource('modul', ModulsController::class);
Route::resource('resultats', ResultatsAprenentatgeController::class);
Route::resource('rubriques', RubriquesController::class);
Route::resource('tipus', TipusUsuarisController::class);
Route::resource('usuari', UsuarisController::class);


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/crud-admin', function () {
    return view('crud-admin');
});
