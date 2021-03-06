<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('teste', function(){
    echo 'Hello World!';
});

Route::get('/', ['uses' => 'Controller@homepage']);
Route::get('/cadastro', ['uses' => 'Controller@cadastrar']);
Route::get('/login', ['uses' => 'Controller@fazerLogin']);


// Rotas para autenciação do usuario
Route::get('/login', ['uses' => 'Controller@fazerLogin']);

