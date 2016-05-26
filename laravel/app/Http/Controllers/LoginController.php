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
		$u_time=date('Y-m-d H:i:s');
		$db=DB::insert("insert into user(u_name,u_pwd,u_tel,u_time) values('$u_name','$u_pwd','$u_tel','$u_time')");
		if($db)
		{
			echo "<script>alert('注册成功');location.href='index'</script>";
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
				echo "<script>alert('登陆成功');location.href='index'</script>";
			}else{
				echo "<script>alert('密码错误');location.href='index'</script>";
			}
		}else{
			echo "<script>alert('用户不存在');location.href='index'</script>";
		}
	}

	//退出
	public function unset1()
	{
		setcookie('name','');
		setcookie('u_id','');
		return redirect()->action('IndexController@index');
	}
	/*发布房源*/
	public function housing()
	{
		if(empty($_COOKIE['name']))
		{
			echo "<script>alert('请先登录');location.href='index'</script>";
		}else{
			return view("publish");
		}
	}

	public function publish2()
	{
		return view("publish2");
	}
	public function publish3()
	{
		return view("publish4");
	}
	
	public function publish5()
	{
		return view("publish5");
	}
	public function addhouse1()
	{
		//echo 123;
		$h_city=Request::input('h_city');
		$h_message=htmlentities($_POST['h_message']);
		//echo $h_message;die;
		$h_price=Request::input('h_price');
		$h_state=Request::input('h_state');
		$u_id=$_COOKIE['u_id'];
		//echo $u_id;die;
		$db=DB::insert("insert into house(h_city,h_message,h_price,h_state,u_id) values('$h_city','$h_message','$h_price','$h_state','$u_id')");
		 //echo $aa;die;
		if($db)
		{
			//echo 123;
			return redirect()->action('LoginController@publish2');
		}else{
			echo "添加失败";
		}
	}

	public function addhouse2()
	{
		//echo 123;
		//$id=mysql_insert_id();
		//echo $id;die;
		
		$h_title=Request::input('h_title');
		$h_content=htmlentities($_POST['h_content']);
		//echo $h_content;die;
		$h_site=htmlentities($_POST['h_site']);
		return redirect()->action('LoginController@publish3');
	}
}
