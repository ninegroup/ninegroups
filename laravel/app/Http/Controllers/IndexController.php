<?php namespace App\Http\Controllers;
use DB;
use Request;
class IndexController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}
	/*用户中心*/
	public function user(){
		@$u_name=$_COOKIE['name'];
		$db=DB::table('user')->where('u_name',$u_name)->first();
		return view('user')->with('u_name', $u_name)->with('db',$db);
	}
	/*修改信息*/
	public function userGai(){
		
	}
}
