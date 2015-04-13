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

Route::get('/', 'MainController@index');

Route::get('cards', 'MainController@cards');

Route::get('cards/create', 'MainController@createNewCard');

Route::get('cards/{id}', 'MainController@specific');

Route::get('cards/{id}/update', 'MainController@updateCurrentCard');

Route::get('cards/{id}/delete', 'MainController@deleteCurrentCard');

Route::post('cards/create', 'MainController@store');

Route::post('cards/{id}/update', 'MainController@update');

Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);
