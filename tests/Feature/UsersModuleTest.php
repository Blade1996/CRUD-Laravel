<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test  */

    public function list_users_page()
    {
        $response = $this->get('/usuarios');

        //Verificar que el estado HTTP sea 200: Correcta 
        $response->assertStatus(200)->assertSee('usuarios');
    }

    /** @test  */
    function list_details_user(){

        $response = $this->get('/usuarios/detalles/5')
                        ->assertStatus(200)
                        ->assertSee("Mostrando detalle del usuario:5");

    }
    
    /** @test */
    function load_new_user_page(){
        $response = $this->get('/usuarios/nuevo')
                        ->assertStatus(200)
                        ->assertSee("Creacion de nuevo usuario");
    }
}
