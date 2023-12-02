<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::match(['post', 'get'], 'login', [AuthenticationController::class, 'login']);
Route::get('logout', [AuthenticationController::class, 'logout']);

Route::resource('salas', SalaController::class)->names('sala');
Route::resource('usuarios', UsuarioController::class)->names('usuario');
Route::resource('reservas', ReservaController::class)->names('reserva');
