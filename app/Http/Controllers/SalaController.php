<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SalaRequest;
use App\Repositories\SalaRepository;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    public function __construct(protected SalaRepository $repository)
    {
    }
    public function index()
    {
        return view('salas.index');
    }

    public function create()
    {
        return view('salas.cadastro');
    }
    public function store(SalaRequest $request)
    {
        $sala =  $this->repository->create($request->all());
        return redirect()->route('sala.show', $sala->id);
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
