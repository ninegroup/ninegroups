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
		$u_id=$arr->u_id;
		//echo $u_id;die;
		$picture=DB::table('picture')->where('pi_h_id',$id)->where('pi_state',2)->get();
		$res=DB::table('user')->where('u_id',$u_id)->first();
		$coms=DB::table('house')->where('u_id',$u_id)->limit(3)->get();
		//var_dump($com);die;
		$h_id=$coms[0]->h_id;	
		$com=DB::table('house')
		->join('picture', 'house.h_id', '=', 'picture.pi_h_id')
		->where('h_state','1')
		->where('pi_state','2')
		->get();
		//var_dump($com);die;
		$data=array(
			'arr'=>$arr,
			'picture'=>$picture,
			'res'=>$res,
			'com'=>$com
		);
		return view('details',$data);

	}

}
