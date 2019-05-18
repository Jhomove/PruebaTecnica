<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'welcomeController@index')->name('index');

Route::get('/usuarios', 'userController@index');

Route::get('/usuarios/{id}', 'userController@userDetail')->where('id', '[0-9]+');//Con esto específicamos que el id solo va a hacer númerico, y se soluciona el problema expuesto abajo

/* Cuando un usuario hace una petición HTTP, Laravel busca en los archivos de rutas
 una definición que coincida con el patrón de la URL según el método HTTP usado y 
 en la primera coincidencia le muestra el resultado al usuario. Por tanto el orden de
  precedencia de las definiciones de rutas es muy importante. */

Route::get('/nuevo', 'userController@newUser')->name('user.create');

Route::post('/','AuthController@signup');

Route::get('/login','userController@layoutLogin')->name('user.login');

Route::post('/login','AuthController@login');

Route::get('/usuarios/{id}/edit', 'userController@editUser');

//Ruta para preguntas

Route::get('/questions','questionsController@questions')->name('questions.index');

//Ruta para el detalle de preguntas

Route::get('/questions/{id}','questionsController@questionDetail')->where('id', '[0-9]+')->name('questions.show');

Route::get('/questions/nuevo', 'questionsController@create')->name('questions.create');

Route::post('/questions', 'questionsController@store');

Route::post('/questions/{id}','questionsController@newAnswer')->where('id', '[0-9]+');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/live_search', 'LiveSearch@index')->name('findUser.index');

Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');