<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservaController extends Controller
{

    public function index()
    {
        return view('cliente.solicitar_reserva');
    }
}
