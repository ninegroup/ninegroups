<?php namespace App\Http\Controllers;

use DB;
use Request;
/*
	*显示详情
	*订单的显示与添加
	*玖组
*/
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
	 //显示详情
	public function index()
	{
		static $pic='';
		$id=Request::get('id');
		$arr=DB::table('house')->where('h_id',$id)->first();
<<<<<<< HEAD
=======

>>>>>>> cb4337c40efc9227e94ae667ade7366b38cf05d4
		$content=$arr->h_content;
		$sheshi=$arr->h_mating;
		$serve=$arr->h_serve;
		$facility=explode(',',$sheshi);
		$facility_num=count($facility);
		$serve=explode(',',$serve);
		$serve_num=count($serve);
		$content=explode('◆',$content);
		$content_num=count($content);
		$picture=DB::table('picture')->where('pi_h_id',$id)->where('pi_state',2)->get();
		$arr=DB::table('house')->where('h_id',$id)->first();
<<<<<<< HEAD
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
=======


		$picture=DB::table('picture')->where('pi_h_id',$id)->where('pi_state',2)->get();
		$arr=DB::table('house')->where('h_id',$id)->first();	
		$picture=DB::table('picture')->where('pi_h_id',$id)->get();




	}

>>>>>>> cb4337c40efc9227e94ae667ade7366b38cf05d4

	public function Collect(){
		$id = Request::get('id');
		$name=$_COOKIE['name'];
		$db=DB::table('collect')->where('co_u_id',$name)->first();
		if($db){
			if($db->co_h_id==$id){
				return 0;
			}else{
				$db=DB::insert("insert into collect(co_u_id,co_h_id) values('$name','$id')");
			}
		}else{
			$db=DB::insert("insert into collect(co_u_id,co_h_id) values('$name',$id)");
		}

	}

<<<<<<< HEAD
=======

>>>>>>> cb4337c40efc9227e94ae667ade7366b38cf05d4
	//显示订单添加
	public function HouseReserve(){
		$name=$_COOKIE['name'];
		$id=Request::get('id');
		$house=DB::table('house')
			->join('picture', 'house.h_id', '=', 'picture.pi_h_id')
			->where('h_id',$id)
			->where('pi_state',2)
			->first();
		$user=DB::table('user')
			->where('u_name',$name)
			->first();
		return view('indent',['house'=>$house,'user'=>$user]);
	}
	//订单添加
	public function CartAdd(){
		$name=$_COOKIE['name'];
		$xiang=Request::get('xiang');
		$arr=explode(',',$xiang);
		$order='jiujiu'.date("YmdHis");
		$c_time=date("Y-m-d H:i:s",time());
		$e_time=date("Hi");
		$h=substr($e_time,0,2);
		$i=substr($e_time,2);
		if($i>60){
			$h=$h+1;
			$i=$i-60;	
		}
		$end_time=$h.':'.$i;
		/*$db=DB::table("cart")->insert([
			'user'=>$arr['user'],	
			'h_id'=>$arr['h_id'],	
			'c_num'=>$arr['c_num'],	
			'c_tel'=>$arr['tel'],
			'c_sex'=>$arr['c_sex'],
			'c_cart'=>$arr['c_cart'],
			'c_name'=>$arr['c_name'],
			'c_email'=>$arr['email'],
			'c_price'=>$arr['c_price'],
			'c_order_num'=>$order
		]);*/
		$db=DB::table("cart")->insert([
			'user'=>$name,
			'c_name'=>$arr['2'],	
			'h_id'=>$arr['0'],	
			'c_num'=>$arr['1'],	
			'c_tel'=>$arr['3'],
			'c_sex'=>$arr['7'],
			'c_cart'=>$arr['6'],
			'c_name'=>$arr['5'],
			'c_email'=>$arr['4'],
			'c_price'=>$arr['8'],
			'c_order_num'=>$order,
			'c_time'=>$c_time,
		]);
		$h_id=$arr['0'];
		$house=DB::table('house')
			->join('picture',"house.h_id",'=','picture.pi_h_id')
			->where('h_id',$h_id)
			->first();
		$user=DB::table('user')
			->where('u_name',$name)
			->first();
		$h_user=DB::table('user')
			->where('u_id',$house->u_id)
			->first();
		return view('reserve',['c_price'=>$arr['8'],'order'=>$order,'end_time'=>$end_time,'house'=>$house,'user'=>$user,'h_user'=>$h_user]);
	}

<<<<<<< HEAD
	public function CollectList(){
		$id=$_COOKIE['u_id'];
		$arr=DB::table('collect')->join('house', 'house.u_id', '=', 'collect.co_u_id')->where("co_u_id",$id)->first();
		//var_dump($db);die;
		return view('person',$arr);
	}
=======
>>>>>>> cb4337c40efc9227e94ae667ade7366b38cf05d4
}
