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
<<<<<<< HEAD
		$arr=DB::table('house')->where('h_id',$id)->first();
		$picture=DB::table('picture')->where('pi_h_id',$id)->where('pi_state',2)->get();
=======
		$arr=DB::table('house')->where('h_id',$id)->first();	
		$picture=DB::table('picture')->where('pi_h_id',$id)->get();
		$u_id=$arr->u_id;
		//echo $u_id;die;
		$res=DB::table('user')->where('u_id',$u_id)->first();
		$com=DB::table('house')->where('u_id',$u_id)->limit(3)->get();
>>>>>>> 1bb3c024a998fa0a046605c42f71dab4c58d75e4
		$data=array(
			'arr'=>$arr,
			'picture'=>$picture,
			'res'=>$res,
			'com'=>$com
		);
		//var_dump($com);die;
		return view('details',$data);
	}

}
