<?php namespace App\Http\Controllers;
use DB;

class BlogController extends Controller {

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
		$id=$_COOKIE['u_id'];
		//echo $id;die;
		$db=DB::table('house')->where('u_id',$id)->get();
		//var_dump($db);die;
		return view('housing')->with('db',$db);
	}

	public function orderList()
	{

		return view('order');
	}

}
