<?php

use App\Http\Controllers\ReservaController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('salas', SalaController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('reservas', ReservaController::class);
