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

Route::group(['prefix' => 'pessoas'], function(){
    Route::get('/', 'PessoasController@index');
});

Route::get('/teste', function(){
    return view('teste');
});

Route::get("/", function(){
    return view("template.app");
});
*/

Route::group(['prefix' => 'pessoas'], function(){
    Route::get('/','PessoasController@index');
    Route::get('/novo', 'pessoasController@novoView');
    Route::get('/{id}/editar', 'pessoasController@editarView');
    Route::post('/store', 'pessoasController@store');
});



