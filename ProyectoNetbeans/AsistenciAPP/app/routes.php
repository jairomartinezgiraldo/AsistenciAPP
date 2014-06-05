<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('profesor', 'ProfesorController');

Route::resource('grupo', 'GrupoController');

Route::resource('estudiante', 'EstudianteController');

Route::resource('curso','CursoController');

Route::resource('estudiante','EstudianteController');

Route::resource('estudiantehasgrupo', 'EstudianteHasGrupoController');

Route::resource('asistencia','AsistenciaController');