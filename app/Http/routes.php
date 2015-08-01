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

Route::resource('Aprediz','ApredizController');
Route::get('Aprediz/destroy/{id}',['as'=> 'Aprediz/destroy','uses'=> 'ApredizController@destroy']);
Route::post('Aprediz/search',['as' => 'Aprediz/search', 'uses' => 'ApredizController@search']);


Route::resource('Centro_Formacion','Centor_FController');
Route::get('Centro_Formacion/destroy/{id}',['as'=> 'Centro_Formacion/destroy','uses'=> 'Centor_FControllerr@destroy']);
Route::post('Centro_Formacion/search',['as' => 'Centro_Formacion/search', 'uses' => 'Centor_FController@search']);

Route::resource('Coordinacion','CoordinacionController');
Route::get('Coordinacion/destroy/{id}',['as'=> 'Coordinacion/destroy','uses'=> 'CoordinacionController@destroy']);
Route::post('Coordinacion/search',['as' => 'Coordinacion/search', 'uses' => 'CoordinacionController@search']);

Route::resource('Dimension','DimensionController');
Route::get('Dimension/destroy/{id_D}',['as'=> 'Dimension/destroy','uses'=> 'DimensionController@destroy']);
Route::post('Dimension/search',['as' => 'Dimension/search', 'uses' => 'DimensionController@search']);

Route::resource('Evaluacion','EvaluacionController');
Route::get('Evaluacion/destroy/{id}',['as'=> 'Evaluacion/destroy','uses'=> 'EvaluacionController@destroy']);
Route::post('Evaluacion/search',['as' => 'Evaluacion/search', 'uses' => 'EvaluacionController@search']);

Route::resource('Ficha','FichaController');
Route::get('Ficha/destroy/{id_Ficha}',['as'=> 'Ficha/destroy','uses'=> 'FichaController@destroy']);
Route::post('Ficha/search',['as' => 'Ficha/search', 'uses' => 'FichaController@search']);

Route::resource('Funcionario','FuncionarioController');
Route::get('Funcionario/destroy/{id_F}',['as'=> 'Funcionario/destroy','uses'=> 'FuncionarioController@destroy']);
Route::post('Funcionario/search',['as' => 'Funcionario/search', 'uses' => 'FuncionarioController@search']);

Route::resource('Pregunta','PreguntaController');
Route::get('Pregunta/destroy/{id_Pregunta}',['as'=> 'Pregunta/destroy','uses'=> 'PreguntaController@destroy']);
Route::post('Pregunta/search',['as' => 'Pregunta/search', 'uses' => 'PreguntaController@search']);

Route::resource('Programa_F','Programa_FController');
Route::get('Programa_F/destroy/{id}',['as'=> 'Programa_F/destroy','uses'=> 'Programa_FController@destroy']);
Route::post('Programa_F/search',['as' => 'Programa_F/search', 'uses' => 'Programa_FController@search']);

Route::resource('Regional','RegionalController');
Route::get('Regional/destroy/{id}',['as'=> 'Regional/destroy','uses'=> 'RegionalController@destroy']);
Route::post('Regional/search',['as' => 'Regional/search', 'uses' => 'RegionalController@search']);

Route::resource('Respuestas','RespuestaController');
Route::get('Respuesta/destroy/{id}',['as'=> 'Respuesta/destroy','uses'=> 'RespuestaController@destroy']);
Route::post('Respuesta/search',['as' => 'Respuesta/search', 'uses' => 'RespuestaController@search']);

Route::resource('Trimestre','TrimestreController');
Route::get('Trimestre/destroy/{id}',['as'=> 'Trimestre/destroy','uses'=> 'TrimestreController@destroy']);
Route::post('Trimestre/search',['as' => 'Trimestre/search', 'uses' => 'TrimestreController@search']);






Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',







]);
