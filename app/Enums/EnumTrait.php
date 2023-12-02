<?php

namespace App\Enums;

trait EnumTrait
{
    public static function getValues()
    {
        return array_column(self::cases(), 'value');
    }
}
