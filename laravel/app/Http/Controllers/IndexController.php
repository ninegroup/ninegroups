<?php namespace App\Http\Controllers;

use DB;
use Request;
use Input;

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
	/*显示主页面*/
	public function index()
	{
		$db=DB::table('picture')
				->join('house', 'picture.pi_h_id', '=', 'house.h_id')
				->where('pi_state','1')
				->get();
		return view('index')->with('db',$db);
	}
	/*用户中心*/
	public function user(){
		//获取用户名
		@$u_name=$_COOKIE['name'];
		$db=DB::table('user')
				->where('u_name',$u_name)
				->first();
		return view('user')
				->with('u_name', $u_name)
				->with('db',$db);
	}
	/*完善信息*/
	public function userGai(){
		@$u_name=$_COOKIE['name'];
		$realname=Request::input('realname');
		$sex=Request::input('sex');
		$u_idcard=Request::input('cardno');
		//文件上传
		$data = Input::all();
		$filename= $data['myfiles']->getClientOriginalName();
		// var_dump($filename);die;
		//检验一下上传的文件是否有效.
		$path = $data['myfiles']-> move('D:\WWW\database\ninegroups\laravel\public\uploads',$filename);
		//$db=DB::insert("insert into user(realname,u_sex,id,u_idcard,u_header) values('$realname','$u_sex','$u_idcard','$filename')");
		//DB::table("user")->update();
		$re=DB::table('user')
            ->where('u_name', $u_name)
            ->update(['realname'=>$realname,'u_sex'=>$sex,'u_idcard'=>$u_idcard,'u_header'=>$filename]);
        if($re){
        	echo "<script>alert('信息更新成功');location.href='user'</script>";
        }
	}
}
