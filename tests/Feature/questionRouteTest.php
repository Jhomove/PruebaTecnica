<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class questionRouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_loads_the_questions_list_page()
    {
        $this->get('/questions')
            ->assertStatus(200);
    }

    public function test_it_question_detail_page(){
        $this->get('/questions/5')
            ->assertStatus(200);
    }
}
