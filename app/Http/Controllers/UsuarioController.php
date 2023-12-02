<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('sala.index');
    }


    public function create()
    {
        return view('sala.create');
    }
    public function store(Request $request)
    {
        return redirect();
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
