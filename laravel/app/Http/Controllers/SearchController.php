<?php 
namespace App\Http\Controllers;

use DB;
use Request;

header('content-type:text/html;charset=utf-8');
class SearchController extends Controller {
	/*房源搜索*/
	public function HomepageSearch(){
		@$name=$_COOKIE['name'];
		$city=Request::get('city');
		$adress=Request::get('adress')?Request::get('adress'):'';
		$db=DB::table('house')->join('picture', 'house.h_id', '=', 'picture.pi_h_id')->where('h_city','like','%'.$city.'%')->where('h_title','like','%'.$adress.'%')->where('h_state','1')->where('pi_state','2')->get();
		$base=DB::table('base')->get();
		$n_base=$this->digui($base,0,0);
		//var_dump($n_base);die;
		return view('lists')->with('name', $name)->with('db',$db)->with('city',$city)->with('base',$n_base)->with('adress',$adress);
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