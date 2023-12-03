<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioRequest;
use App\Repositories\UsuarioRepository;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function __construct(protected UsuarioRepository $repository)
    {
    }
    public function index()
    {
        return view('sala.index');
    }

    public function create()
    {
        return view('sala.create');
    }
    public function store(UsuarioRequest $request)
    {
        $usuario =  $this->repository->create($request->all());
        return redirect()->route('usuario.show', $usuario->id);
    }
    public function show(string $id)
    {
    }
    public function update(Request $request, string $id)
    {
    }
    public function destroy(string $id)
    {
    }
}
