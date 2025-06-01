<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_application_returns_a_successful_response()
    {
      
        $this->markTestSkipped('Teste desativado');

        $response = $this->get('/');
        $response->assertStatus(200);
    }
}