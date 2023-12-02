<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class SalaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => 'Sala ' . fake()->random_int(10),
            'capacidade' => fake()->random_int(10),
            'descricao' => fake()->text(100)
        ];
    }
}
