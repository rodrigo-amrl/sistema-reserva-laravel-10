<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;

class Usuario extends User
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'tipo',
        'status'
    ];
    public function getAuthPassword()
    {
        return $this->senha;
    }
}
