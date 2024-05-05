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

Route::get('/', function () {
    return view('welcome');
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
