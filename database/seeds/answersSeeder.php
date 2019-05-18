<?php

use Illuminate\Database\Seeder;
use Curso\Question;
use Curso\User;
use Curso\Answer;

class answersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userId = User::where('id', 1)->value('id');
        $questionId = Question::where('id',1)->value('id');

        Answer::create([
            'text' => 'Esta es mi respuesta.',
            'id_question' => $questionId,
            'id_user' => $userId
        ]);

        Answer::create([
            'text' => 'Esta es otra respuesta.',
            'id_question' => $questionId,
            'id_user' => $userId
        ]);
    }
}
