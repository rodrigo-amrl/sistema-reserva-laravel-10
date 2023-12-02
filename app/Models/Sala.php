<?php

namespace App\Models;

use App\Enums\StatusPadrao;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    protected $casts = [
        'status' => StatusPadrao::class
    ];
}
