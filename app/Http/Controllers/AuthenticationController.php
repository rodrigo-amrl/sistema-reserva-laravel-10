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
    public function login(LoginRequest $request)
    {
        if (!Auth::attempt(['password' => $request->senha, 'email' => $request->email]))
            return redirect()->back()->with(['error' => 'Email ou Senha inválida']);

        return redirect('inicio');
    }
}
