<?php

namespace App\Models;

use Database\Factories\ReservaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'sala_id',
        'usuario_id',
        'data_hora_inicio',
        'data_hora_fim',
        'status_reserva'
    ];
}
