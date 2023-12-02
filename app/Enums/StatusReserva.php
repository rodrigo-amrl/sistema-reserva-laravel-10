<?php

namespace App\Enums;

enum StatusReserva: string
{
    use EnumTrait;

    case Pendente = 'pendente';
    case Aprovada = 'aprovada';
    case Rejeitada = 'rejeitada';
}
