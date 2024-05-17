<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarisController;
use App\Http\Controllers\TipusUsuarisController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|s
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Al iniciar vermeos antes el login

Route::get('/', function () {
    return view('auth/login');
});



Route::get('/autoevaluacion', function () {
    return view('/AutoevaluacionAlumnos/index');
});


Route::get('/profe', function () {
    return view('/profevista/index');
});

Route::resource('usuari',UsuarisController::class);
Route::resource('Tipus_usuari',TipusUsuarisController::class);
Route::post('/usuarios', [UsuarisController::class, 'store']);

Route::resource('usuarios', UsuarisController::class);
Route::get('/login', [UsuarisController::class, 'showLogin'])->name('login');
Route::post('/login', [UsuarisController::class, 'login']);





Route::middleware(['auth'])->group(function(){
    Route::get('/home', function () {
        $user = Auth::user();
        return view('home', compact('user'));
    });
});
