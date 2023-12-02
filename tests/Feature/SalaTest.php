<?php

namespace Tests\Feature;

use App\Models\Sala;
use Tests\TestCase;

class SalaTest extends TestCase
{

    public function test_create_sala(): void
    {
        $sala = Sala::factory()->make();

        $response = $this->post('salas', $sala->toArray());

        $response->assertRedirectContains('salas/');
        $this->assertDatabaseHas('salas', ['nome' => $sala->nome]);
        Sala::where('nome', $sala->nome)->delete();
    }
}
