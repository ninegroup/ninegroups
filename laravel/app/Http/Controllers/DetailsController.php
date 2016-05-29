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
<<<<<<< HEAD
		$content=$arr->h_content;
		$sheshi=$arr->h_mating;
		$serve=$arr->h_serve;
		$facility=explode(',',$sheshi);
		$facility_num=count($facility);
		$serve=explode(',',$serve);
		$serve_num=count($serve);
		$content=explode('◆',$content);
		$content_num=count($content);
=======

		$picture=DB::table('picture')->where('pi_h_id',$id)->where('pi_state',2)->get();
		$arr=DB::table('house')->where('h_id',$id)->first();	

>>>>>>> a151d45a2432510be694ac246b3708c94837cb82
		$picture=DB::table('picture')->where('pi_h_id',$id)->get();
		$u_id=$arr->u_id;
		//echo $u_id;die;
		$res=DB::table('user')->where('u_id',$u_id)->first();
		$com=DB::table('house')->where('u_id',$u_id)->limit(3)->get();
		$data=array(
			'arr'=>$arr,
			'picture'=>$picture,
			'res'=>$res,
			'com'=>$com,
			'facility'=>$facility,
			'serve'=>$serve,
			'content'=>$content,
			'facility_num'=>$facility_num,
			'serve_num'=>$serve_num,
			'content_num'=>$content_num,
		);
		//var_dump($com);die;
		return view('details',$data);

	}

}
