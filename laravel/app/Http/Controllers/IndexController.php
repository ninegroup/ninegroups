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
		$db=DB::table('picture')->join('house', 'picture.pi_h_id', '=', 'house.h_id')->where('pi_state','1')->get();
		return view('index')->with('db',$db);
	}

}
