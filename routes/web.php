<?php

use App\Http\Controllers\Cliente\AuthenticationController;
use App\Http\Controllers\Cliente\HomeController;
use App\Http\Controllers\Cliente\ReservaController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\Cliente\UsuarioController;
use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;




Route::get('login', [AuthenticationController::class, 'index'])->name('login');
Route::post('autenticacao', [AuthenticationController::class, 'autenticar'])->name('autenticar');
Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::get('cadastro', [AuthenticationController::class, 'cadastro'])->name('cadastro');
Route::post('cadastrar', [AuthenticationController::class, 'cadastrar'])->name('cadastrar');



// Route::middleware('auth')->group(function () {

Route::get('/', function () {
    return   redirect()->to('bem_vindo');
});
Route::get('bem_vindo', [HomeController::class, 'bemVindo']);
Route::get('inicio', [HomeController::class, 'index']);
Route::resource('salas', SalaController::class)->names('sala');
Route::resource('usuarios', UsuarioController::class)->names('usuario');
Route::resource('reservas', ReservaController::class)->names('reserva');
// });


Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return   view('admin.home');
    });
    Route::get('login', [Admin\AuthenticationController::class, 'index'])->name('login');
    Route::post('autenticacao', [Admin\AuthenticationController::class, 'autenticar'])->name('autenticar');
    Route::get('logout', [Admin\AuthenticationController::class, 'logout'])->name('logout');
});
