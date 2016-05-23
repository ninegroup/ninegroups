<?php namespace App\Http\Controllers;

use DB;
use Request;

header('content-type:text/html;charset=utf-8');
class SearchController extends Controller {
	public function HomepageSearch(){
		$name=$_COOKIE['name'];
		$city=Request::get('city');
		$time=Request::get('time');
		$db=DB::table('house')->join('picture', 'house.h_id', '=', 'picture.pi_h_id')->where('h_city','like','%'.$city.'%','and','h_state','1')->get();
		//var_dump($db);die;
		return view('zhu')->with('name', $name)->with('db',$db);
	}
}?>