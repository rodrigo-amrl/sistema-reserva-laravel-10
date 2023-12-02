<?php

namespace Tests\Feature;

use App\Models\Reserva;
use App\Models\Usuario;
use Tests\TestCase;

class ReservaTest extends TestCase
{
    public function test_create_reserva(): void
    {
        $reserva = Reserva::factory()->make();

        $response = $this->post('reservas', $reserva->toArray());
        $response->assertRedirectContains('reservas');
        $this->assertDatabaseHas('reservas', ['sala_id' => $reserva->sala_id, 'usuario_id' => $reserva->usuario_id]);
    }
}
