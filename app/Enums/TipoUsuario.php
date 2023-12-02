<?php

namespace App\Enums;

enum TipoUsuario: string
{
    use EnumTrait;

    case Admin = 'admin';
    case cliente = 'cliente';
    case colaborador = 'colaborador';
}
