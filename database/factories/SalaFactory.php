<?php

namespace Database\Factories;

use App\Models\Sala;
use Illuminate\Database\Eloquent\Factories\Factory;


class SalaFactory extends Factory
{

    protected $model = Sala::class;
    public function definition(): array
    {
        return [
            'nome' => 'Sala ' . fake()->randomNumber(3),
            'capacidade' => fake()->randomNumber(3),
            'descricao' => fake()->text(100)
        ];
    }
}
