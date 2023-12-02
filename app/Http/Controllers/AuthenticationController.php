<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Repositories\UsuarioRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function __construct(protected UsuarioRepository $repository)
    {
    }
    public function index()
    {
        return view('login');
    }
    public function autenticar(LoginRequest $request)
    {
        dd($request->method('get'));
        if ($request->method('get'))
            if (!Auth::attempt(['password' => $request->senha, 'email' => $request->email]))
                return redirect()->back()->with(['error' => 'Email ou Senha inválida']);

        return redirect('inicio');
    }
    public function cadastro()
    {
        return view('usuario.cadastro');
    }
    public function cadastrar(Request $request){
    }
}
