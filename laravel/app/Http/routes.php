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
Route::get('orderList', 'BlogController@orderList');

Route::get('userList', 'ContactController@index');

Route::get('details', 'DetailsController@index');

Route::get('service', 'ServiceController@index');
Route::get('personal', 'IndexController@personal');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



//注册
Route::any('/register','LoginController@register');
Route::any('/index','IndexController@index');
//登陆
Route::any('/login','LoginController@login');
//用户中心
Route::any('/Index/user', [ 'as' => 'Index/user', 'uses' => "IndexController@user"]);
//用户修改
Route::any('/Index/userGai', [ 'as' => 'Index/userGai', 'uses' => "IndexController@userGai"]);
//个人中心
Route::any('/Index/userList', [ 'as' => 'Index/userList', 'uses' => "IndexController@userList"]);
//预定房间
Route::any('/Details/HouseReserve', [ 'as' => 'Details/HouseReserve', 'uses' => "DetailsController@HouseReserve"]);

//退出
Route::any('unset1','LoginController@unset1');
Route::any('/Login/housing', [ 'as' => 'Login/housing', 'uses' => "LoginController@housing"]);

//预定房间
Route::any('/Details/HouseReserve', [ 'as' => 'Details/HouseReserve', 'uses' => "DetailsController@HouseReserve"]);

//收藏房间
//Route::any('/Details/Collect', [ 'as' => 'Details/Collect', 'uses' => "DetailsController@Collect"]);

Route::any('/Login/publish2', [ 'as' => 'Login/publish2', 'uses' => "LoginController@publish2"]);

Route::any('Details/Collect', 'DetailsController@Collect');
Route::any('demo', 'DetailsController@Collect');


Route::any('/Login/publish2', [ 'as' => 'Login/publish2', 'uses' => "LoginController@publish2"]);

Route::any('/Login/publish2', [ 'as' => 'Login/publish2', 'uses' => "LoginController@publish2"]);

//查询城市信息
//Route::any('search','SearchController@HomepageSearch');
Route::any('/Search/HomepageSearch', [ 'as' => 'Search/HomepageSearch', 'uses' => "SearchController@HomepageSearch"]);

//房源具体信息页面
Route::any('/Details/Index', [ 'as' => 'Details/Index', 'uses' => "DetailsController@Index"]);
Route::any('/Details/HouseReserve', [ 'as' => 'Details/HouseReserve', 'uses' => "DetailsController@HouseReserve"]);
Route::any('/Details/CartAdd', [ 'as' => 'Details/CartAdd', 'uses' => "DetailsController@CartAdd"]);
//发布房源login/addhouse1
Route::any('addhouse1','LoginController@addhouse1');
