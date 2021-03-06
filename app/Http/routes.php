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

Route::get('/', 'PagesController@index');

Route::get('home', 'HomeController@index');

Route::get('contact', 'PagesController@contact');
Route::get('about', 'PagesController@about');

Route::get('profiles', 'ProfilesController@index');
Route::get('profiles/create', 'ProfilesController@create');
Route::get('profiles/{id}', 'ProfilesController@show');
Route::post('profiles', 'ProfilesController@store');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
