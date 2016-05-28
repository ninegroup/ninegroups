<?php namespace App\Http\Controllers;

use DB;
use Request;

class DetailsController extends Controller {

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
		static $pic='';
		$id=Request::get('id');
		$arr=DB::table('house')->where('h_id',$id)->first();
		$picture=DB::table('picture')->where('pi_h_id',$id)->where('pi_state',2)->get();
		$data=array(
			'arr'=>$arr,
			'picture'=>$picture
		);
		return view('details',$data);
	}

}
