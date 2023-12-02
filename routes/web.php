<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;



Route::get('login', [AuthenticationController::class, 'index'])->name('login');
Route::post('autenticacao', [AuthenticationController::class, 'autenticar'])->name('autenticar');
Route::get('logout', [AuthenticationController::class, 'logout']);

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::resource('salas', SalaController::class)->names('sala');
    Route::resource('usuarios', UsuarioController::class)->names('usuario');
    Route::resource('reservas', ReservaController::class)->names('reserva');
});
