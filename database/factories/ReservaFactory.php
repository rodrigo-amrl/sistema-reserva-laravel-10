<?php

namespace Database\Factories;

use App\Models\Sala;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservaFactory extends Factory
{


    public function definition(): array
    {
        $data_hora_inicio  = fake()->dateTime();
        $data_hora_fim = '';
        return [
            'sala_id' => Sala::class,
            'usuario_id' => Usuario::class,
            'data_hora_inicio' => $data_hora_inicio,
            'data_hora_fim' => $data_hora_fim
        ];
    }
}
