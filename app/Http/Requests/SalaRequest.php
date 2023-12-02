<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nome' => 'required|max:100',
            'capacidade' => 'required|integer',
            'descricao' => 'required'
        ];
    }
}
