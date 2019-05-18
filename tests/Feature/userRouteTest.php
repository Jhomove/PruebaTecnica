<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class userRouteTest extends TestCase
{
    /** @test */
    public function test_it_loads_the_users_list_page()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Usuarios');
    }

    public function test_it_loads_the_users_details_page()
    {
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Mostrando detalle del usuario: 5');
    }

    public function test_it_loads_the_new_user_page()
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Nuevo usuario');
    }

    public function test_it_loads_the_edit_user_page(){
        $this->get('/usuarios/5/edit')
            ->assertStatus(200)
            ->assertSee('Editando al usuario: 5');
    }
}
