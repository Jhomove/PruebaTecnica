<?php

namespace Curso\Http\Controllers;

use Illuminate\Http\Request;
use Curso\User;

class userController extends Controller
{
    public function index(){
        return 'Usuarios';
    }

    public function userDetail($id){
        return "Mostrando detalle del usuario: {$id}";
    }

    public function newUser(){
        return view('users.create');
    }

    public function layoutLogin(){
        return view('users.login');
    }

    public function storeUser(){//en este método debo verificar si el usuario esta registrado
        $data = request()->all();
        // dd($data['title']);
        User::create([
            'name' => $data['name'],
            'documento' => $data['document'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role_id' => 2
        ]);
        return redirect()->route('questions.index');
    }

    public function editUser($id){
        return "Editando al usuario: {$id}";
    }
}
