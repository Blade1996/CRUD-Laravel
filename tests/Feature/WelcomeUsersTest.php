<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    function load_welcome_user_with_nickname()
    {
        $response = $this->get('/saludo/iesus/blade');

        $response->assertStatus(200)->assertSee('hola Iesus, tu apodo es blade');
    }

    function load_welcome_user_without_nickname(){
        $response = $this->get('/saludo/iesus')
                        ->assertStatus(200)
                        ->assertSee('hola Iesus, no tienes apodo');
    }

}
