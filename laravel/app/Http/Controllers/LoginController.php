<?php namespace App\Http\Controllers;

use DB;
use Request;

header('content-type:text/html;charset=utf-8');
class LoginController extends Controller {
	//注册页面
	public function register()
	{
		$u_name=Request::input('u_name');
		//echo $u_name;
		$u_pwd=Request::input('u_pwd');
		$u_tel=Request::input('u_tel');
		//echo $u_pwd;
		$db=DB::insert("insert into user(u_name,u_pwd,u_tel) values('$u_name','$u_pwd','$u_tel')");
		if($db)
		{
			echo "<script>alert('注册成功');location.href='/database/ninegroups/laravel/public/index'</script>";
		}
	}
	//登陆
	public function login()
	{
		$u_name=Request::input('u_name');
		//echo $u_name;die;
		$u_pwd=Request::input('u_pwd');
		$db=DB::table('user')->where('u_name',$u_name)->first();
		//var_dump($db);die;
		//$pwd=$db->u_pwd;
		//echo $pwd;
		if($db)
		{
			if($db->u_pwd==$u_pwd)
			{
				$name1=$db->u_name;
				$id=$db->u_id;
				//echo $name1;die;
				setcookie('name',$name1);
				setcookie('u_id',$id);
				//echo $_COOKIE['u_id'];die;
				echo "<script>alert('登陆成功');location.href='/database/ninegroups/laravel/public/index'</script>";
			}else{
				echo "<script>alert('密码错误');location.href='/database/ninegroups/laravel/public/index'</script>";
			}
		}else{
			echo "<script>alert('用户不存在');location.href='/database/ninegroups/laravel/public/index'</script>";
		}
	}

	//退出
	public function unset1()
	{
		setcookie('name','');
		setcookie('u_id','');
		return redirect()->action('IndexController@index');
	}
	public function housing()
	{
		if(empty($_COOKIE['name']))
		{
			echo "<script>alert('请先登录');location.href='/database/ninegroups/laravel/public/index'</script>";
		}else{
			return view("publish");
		}
	}
}
