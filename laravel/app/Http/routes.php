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

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);

Route::get('/', function()
{
	return Redirect::to('auth/login');
});


Route::group(['middleware' => 'auth'], function()
{
	Route::resource('users', 'UsersController');

	Route::model('users', 'App\User', function()
	{
		abort(404);
	});

	Route::resource('listes', 'ListesController');

	Route::model('listes', 'App\Liste', function()
	{
		abort(404);
	});
});

