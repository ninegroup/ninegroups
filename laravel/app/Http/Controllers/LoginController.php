<?php namespace App\Http\Controllers;

use DB;
use Request;
use Input;

header('content-type:text/html;charset=utf-8');
/*
*用于用户登录、注册以及发布房源
*author:renpengdong
*date:2016/5/24
*/
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
		//echo 123;die;
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
			echo"<script>alert('请先登录');history.go(-1);</script>"; 

<<<<<<< HEAD
=======
			//return redirect()->action('IndexController@index');
>>>>>>> 445c1c646db16b1546dba72e14326af67c268fdd
		}else{
			
			return view("publish");
		}
	}
	/*
	*发布房源
	*/
	public function addhouse1()
	{
		$data = Input::file('myfiles');
           // print_r(count($data));die;
            $str='';
            for($i=0;$i<count($data);$i++){
                $filename= $data[$i]->getClientOriginalName();
                $path = $data[$i]-> move('uploads',$filename);
                $str.='|'.$filename;
            }
            $str1 = substr($str,1);
            // var_dump($str1);die;
		$h_city=Request::input('h_city');
		$h_people=Request::input('h_people');
		$h_message=Request::input('h_message');
		//echo $h_message;die;
		$h_price=Request::input('h_price');
		$h_state=Request::input('h_state');
		$h_title=Request::input('h_title');
		$h_content=Request::input('h_content');
		$h_site=Request::input('h_site');
		$h_checkin=Request::input('h_checkin');		
		$h_mating=Request::input('h_mating');

		$h_mating1=implode(',', $h_mating);
		//var_dump($h_mating1);die;
		$h_serve=Request::input('h_serve');
//var_dump($h_serve);die;
		$h_serve1=implode(',', $h_serve);
		$h_h=Request::input('h_h');
		$h_type=Request::input('h_type');
		//var_dump($h_serve1);die;
		
		$u_id=$_COOKIE['u_id'];
		$db=DB::table("house")->insert([
			'h_city'=>$h_city,	
			'h_message'=>$h_message,	
			'h_price'=>$h_price,	
			'h_state'=>$h_state,	
			'u_id'=>$u_id,	
			'h_people'=>$h_people,	
			'h_title'=>$h_title,	
			'h_content'=>$h_content,	
			'h_site'=>$h_site,	
			'h_checkin'=>$h_checkin,
			'h_h'=>$h_h,
			'h_type'=>$h_type,
			'h_mating'=>$h_mating1,
			'h_serve'=>$h_serve1,
			
		]);
		$pic=DB::table("picture")->insert([
			'pi_path'=>$str1,
			]);
		
		if($db)
		{
			$up=DB::table("user")->where('u_id',$u_id)->update([
				'u_owner'=> '2',
			]);
			echo "<script>alert('发布成功，请等待审核');location.href='index'</script>";
		}else{
			echo "添加失败";
		}
	}
}
