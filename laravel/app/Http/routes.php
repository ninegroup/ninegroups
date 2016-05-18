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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('index', 'IndexController@index');

Route::get('about', 'AboutController@index');

Route::get('blog', 'BlogController@index');

Route::get('contact', 'ContactController@index');

Route::get('details', 'DetailsController@index');

Route::get('service', 'ServiceController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
