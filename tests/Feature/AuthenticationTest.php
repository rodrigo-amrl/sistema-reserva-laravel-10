<?php

namespace Tests\Feature;

use App\Models\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    public function test_login(): void
    {
        $usuario = Usuario::factory()->create();
        $response = $this->post('login', ['email' => $usuario->email, 'senha' => 'password']);

        $response->assertRedirect('inicio');
        $usuario->delete();
    }
}
