<?php

namespace Curso\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    //
    public function index(){
        $welcome = "Welcome to Aunar-Overflow";
        $title = "Aunar-Overflow";
        return view('home.index',compact('welcome','title'));
    }
}
