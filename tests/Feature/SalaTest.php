<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SalaTest extends TestCase
{

    public function test_create_sala(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
