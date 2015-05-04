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

//cards

Route::get('cards', 'MainController@cards');

Route::get('cards/create', 'MainController@createNewCard');

Route::get('cards/{id}', 'MainController@specificCard');

Route::get('cards/{id}/update', 'MainController@updateCurrentCard');

Route::get('cards/{id}/delete', 'MainController@deleteCurrentCard');

Route::post('cards/{id}/update', 'MainController@updateCard');

Route::post('cards/create', 'MainController@storeCard');

//users

Route::get('users', 'MainController@users');

Route::get('users/{id}', 'MainController@specificUser');

Route::get('users/{id}/update', 'MainController@updateCurrentUser');

Route::get('users/{id}/delete', 'MainController@deleteCurrentUser');

Route::post('users/{id}/update', 'MainController@updateUser');

Route::post('users/{id}', 'MainController@updateInventory');

Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);
