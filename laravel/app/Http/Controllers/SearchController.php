<?php 
namespace App\Http\Controllers;

namespace App\Http\Controllers;

use DB;
use Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller {
	/*房源搜索*/
	public function HomepageSearch(){
		//获取用户的COOKIE
		@$name=$_COOKIE['name'];
		//接收查询的城市名
		$city=Request::get('city');
		//其他条件(房名)
		$adress=Request::get('adress')?Request::get('adress'):'';
		//排序
		$order=Request::get('order')?Request::get('order'):'';
		//判断是否需要排序
		if($order){
			$db=DB::table('house')->join('picture', 'house.h_id', '=', 'picture.pi_h_id')->where('h_city','like','%'.$city.'%')->where('h_title','like','%'.$adress.'%')->where('h_state','1')->where('pi_state','2')->orderby('h_price',"$order")->paginate(3);
		}else{
			$db=DB::table('house')
				->join('picture', 'house.h_id', '=', 'picture.pi_h_id')
				->where('h_city','like','%'.$city.'%')
				->where('h_title','like','%'.$adress.'%')
				->where('h_state','1')
				->where('pi_state','2')
				->paginate($perPage = 6, $columns = ['*'], $pageName = 'page');
		}
		//查询热房
		$hot=DB::table('picture')
				->join('house', 'picture.pi_h_id', '=', 'house.h_id')
				->where('pi_state','3')
				->get();
		//var_dump($db);die;
		//获取类型
		$base=DB::table('base')->get();
		//类型进行递归
		$n_base=$this->digui($base,0,0);
		//var_dump($n_base);die;
		//计算符合条件的总数
		$count=count($db);
		//更改排序的传递值
		if($order=='asc'){
			$order='desc';
		}else{
			$order='asc';
		}
		//跳转视图层
		/*return view('lists')->with('name', $name)->with('db',$db)->with('city',$city)->with('order',$order)->with('base',$n_base)->with('adress',$adress)->with('count',$count)->with('hot',$hot);*/
		return view('lists',['name'=>$name,'db'=>$db,'city'=>$city,'order'=>$order,'base'=>$n_base,'adress'=>$adress,'count'=>$count,'hot'=>$hot]);
	}
	//递归
	public function digui($data,$path,$flage){
        static $arr=array();
        foreach($data as $k=>$v){
            if($v->bf_id==$path){
                $v->flage=$flage;
                $arr[]=$v;
                $this->digui($data,$v->b_id,$flage+1);
            }
		}
		return $arr;
	}
}?>