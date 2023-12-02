<?php

namespace App\Enums;


enum StatusPadrao: string
{
    use EnumTrait;

    case Ativo = "ativo";
    case Inativo = "inativo";
}
