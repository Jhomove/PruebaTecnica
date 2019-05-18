<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class welcomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_loads_the_welcome_page()
    {
        $this->get('/')
            ->assertStatus(200)
            ->assertSee('Welcome to Aunar-Overflow');
    }
}
