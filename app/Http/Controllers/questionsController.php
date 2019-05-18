<?php

namespace Curso\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Curso\Question;
use Curso\Answer;

class questionsController extends Controller
{
    //
    public function questions(){
        $questions = Question::all();

        $title = "Questions";
        return view('questions.questions', compact('questions','title'));
    }

    //Question detail function

    public function questionDetail($id){
        $question = Question::findOrFail($id);

        // if($question === null){
        //     return response()->view('errors.404', [], 404);
        // }
        $answers = Answer::select('answers.text','users.name')
                        ->where('id_question','=',$id)
                        ->join('users','answers.id_user','=','users.id')->get();
        
        $title = $question['title'];
        return view('questions.questionDetail',compact('question','title','answers'));
    }

    public function create(){
        return view('questions.create');
    }

    public function store(){//en este método debo verificar si el usuario esta registrado
        $data = request()->all();
        // dd($data['title']);
        Question::create([
            'title' => $data['title'],
            'text' => $data['text'],
            'id_user' => Auth::id()
        ]);
        return redirect()->route('questions.index');
    }

    public function newAnswer($id){
        $data = request()->all();

        Answer::create([
            'text' => $data['text'],
            'id_question' => $id,
            'id_user' => Auth::id()
        ]);
        return redirect()->route('questions.show',$id);
    }
}
