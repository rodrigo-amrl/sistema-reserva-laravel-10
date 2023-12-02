<?php

namespace Tests\Feature;

use App\Models\Usuario;
use Tests\TestCase;

class UsuarioTest extends TestCase
{
    public function test_create_usuario(): void
    {
        $usuario = Usuario::factory()->make();
        $response = $this->post('usuarios', $usuario->toArray());

        $response->assertRedirectContains('usuarios/');
        $this->assertDatabaseHas('usuarios', ['email' => $usuario->email]);

        Usuario::where('email', $usuario->email)->delete();
    }
}
