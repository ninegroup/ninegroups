<?php 
namespace App\Http\Controllers;


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
		$hot=DB::table('picture')
				->join('house', 'picture.pi_h_id', '=', 'house.h_id')
				->where('pi_state','3')
				->get();
		return view('index')
				->with('db',$db)
				->with('hot',$hot);

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
		$u_id=$_COOKIE['u_id'];
		$u_name=Request::input('u_name');
		$sex=Request::input('u_sex');
		$u_idcard=Request::input('u_idcard');
		$u_tel=Request::input('u_tel');
		//文件上传
		$data = Input::all();
		//获取文件名
		$filename= $data['myfiles']->getClientOriginalName();
		// var_dump($filename);die;
		//检验一下上传的文件是否有效.
		$path = $data['myfiles']-> move('uploads',$filename);
		//修改个人信息
		$update=DB::table('user')
            ->where('u_id', $u_id)
            ->update([
            	'u_name'=>$u_name,
            	'u_sex'=>$sex,
            	'u_idcard'=>$u_idcard,
            	'u_header'=>$filename,
            ]);
        if($update){
        	echo "<script>alert('信息更新成功');location.href='/Index/userList'</script>";
        }
	}
	public function userList(){
		$id=$_COOKIE['u_id'];
		$db=DB::table('user')->where("u_id",$id)->first();
		//var_dump($db);die;
		return view('users')->with('db',$db);
	}
}
