<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioRequest;
use App\Repositories\UsuarioRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(protected UsuarioRepository $repository)
    {
    }
    public function index()
    {
        return view('cliente.home');
    }
    public function bemVindo()
    {
        return view('bem_vindo');
    }
}
