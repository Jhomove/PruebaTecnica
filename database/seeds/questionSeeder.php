<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Curso\User;
use Curso\Question;

class questionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userId = User::where('id', 1)->value('id');

        Question::create([
            'title' => 'Esta es una pregunta',
            'text' => 'Esta es la descripción de mi pregunta',
            'id_user' => $userId
        ]);
    }
}
