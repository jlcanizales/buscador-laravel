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
/**
 * Ruta que lleva al formulario al entrar a la raíz.
 */
Route::get('/', array('as' => 'formulario', 'uses' => 'HomeController@showForm'));

/**
 * Ruta que muestra los resultados de la búsqueda
 */
Route::get('/resultados',array('as' => 'resultados', 'uses' => 'HomeController@showResults'));