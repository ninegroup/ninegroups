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

Route::get('aa', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/', 'IndexController@index');

Route::get('about', 'AboutController@index');

Route::get('blog', 'BlogController@index');

Route::get('contact', 'ContactController@index');

Route::get('details', 'DetailsController@index');

Route::get('service', 'ServiceController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



//注册
Route::any('register','LoginController@register');
Route::any('index','IndexController@index');
//Route::any('/Index/index', [ 'as' => 'Index/index', 'uses' => "IndexController@index"]);
//登陆
Route::any('login','LoginController@login');
//用户中心
Route::any('/Index/user', [ 'as' => 'Index/user', 'uses' => "IndexController@user"]);
//用户修改
Route::any('/Index/userGai', [ 'as' => 'Index/userGai', 'uses' => "IndexController@userGai"]);

//退出
Route::any('unset1','LoginController@unset1');
Route::any('/Login/housing', [ 'as' => 'Login/housing', 'uses' => "LoginController@housing"]);
Route::any('/Login/publish2', [ 'as' => 'Login/publish2', 'uses' => "LoginController@publish2"]);
Route::any('/Login/publish3', [ 'as' => 'Login/publish3', 'uses' => "LoginController@publish3"]);
Route::any('/Login/publish4', [ 'as' => 'Login/publish4', 'uses' => "LoginController@publish4"]);
Route::any('/Login/publish5', [ 'as' => 'Login/publish5', 'uses' => "LoginController@publish5"]);

//查询城市信息
//Route::any('search','SearchController@HomepageSearch');
Route::any('/Search/HomepageSearch', [ 'as' => 'Search/HomepageSearch', 'uses' => "SearchController@HomepageSearch"]);