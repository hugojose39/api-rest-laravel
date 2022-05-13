<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiTest extends TestCase
{
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->postJson(route('api.search'), ['text'=> "XL"]);

        $response->assertStatus(200)->assertJson([
            'number' => 'XL',
            'value' => 40
        ]);
    }

    public function test_the_application_returns_a_not_successful_response()
    {
        $response = $this->postJson(route('api.search'), ['text'=> "XLS"]);

        $response->assertStatus(422)->assertJsonPath(
            'message', 'Sua requisição falhou, por favor tente novamente com números romanos válidos!'
        );
    }
}
