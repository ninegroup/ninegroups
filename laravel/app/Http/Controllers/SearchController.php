<?php namespace App\Http\Controllers;

use DB;
use Request;

header('content-type:text/html;charset=utf-8');
class SearchController extends Controller {
	public function HomepageSearch(){
		$city=Request::get('city');
		$time=Request::get('time');
		$db=DB::table('house')->where('h_city','like','%'.$city.'%')->get();
		return view('zhu')->with('city', $city);;
	}
}?>