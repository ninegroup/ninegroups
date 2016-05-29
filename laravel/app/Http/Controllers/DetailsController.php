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
		// var_dump($arr);die;
=======
<<<<<<< HEAD

		$arr=DB::table('house')->where('h_id',$id)->first();
=======
>>>>>>> 6788bc0f6acd3442c48a3b2a29ce7a36df0b3eba
		$arr=DB::table('house')->where('h_id',$id)->first();
		$picture=DB::table('picture')->where('pi_h_id',$id)->where('pi_state',2)->get();
		$arr=DB::table('house')->where('h_id',$id)->first();	
<<<<<<< HEAD
=======
=======
>>>>>>> 3a9aa5c1aafb29550d44d30da4a404b81edfd4bb
>>>>>>> 20a30d3f39d54eab25d394f279d8ad37e033f337
>>>>>>> 6788bc0f6acd3442c48a3b2a29ce7a36df0b3eba
		$picture=DB::table('picture')->where('pi_h_id',$id)->get();
		$u_id=$arr->u_id;
		//echo $u_id;die;
		$res=DB::table('user')->where('u_id',$u_id)->first();
		$com=DB::table('house')->where('u_id',$u_id)->limit(3)->get();
		$data=array(
			'arr'=>$arr,
			'picture'=>$picture,
			'res'=>$res,
			'com'=>$com
		);
		//var_dump($com);die;
		return view('details',$data);
<<<<<<< HEAD

=======
>>>>>>> 20a30d3f39d54eab25d394f279d8ad37e033f337
	}

}
