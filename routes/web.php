<?php

use App\Http\Controllers\ReservaController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('salas', SalaController::class)->names('sala');
Route::resource('usuarios', UsuarioController::class)->names('usuario');
Route::resource('reservas', ReservaController::class)->names('reserva');
