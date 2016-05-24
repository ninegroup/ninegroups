<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
/*
	*
	*2016/5/24
	*玖组
*/
class BaseController extends \yii\web\Controller
{
	//跳过csrf验证
	public $enableCsrfValidation = false;
	//跳转类型页面
	public function actionJqueryui()
    {
		$sql="select * from base";
		$command=Yii::$app->db->createCommand($sql);
		$data=$command->queryAll();
		$arr=$this->digui($data,0,0);
		return $this->renderPartial('jquery-ui.html',array('arr'=>$arr));
    }
	//跳转类型列表
	public function actionNestablelist(){
		$sql="select * from base";
		$command=Yii::$app->db->createCommand($sql);
		$data=$command->queryAll();
		$arr=$this->digui($data,0,0);
		return $this->renderPartial('nestable-list.html',array('arr'=>$arr));
	}
	//添加类型
	public function actionBaseadd(){
		$request = Yii::$app->request;
		$bf_id = $request->post('bf_id');
		$b_name = $request->post('b_name');
		$sql="insert into base(b_name,bf_id)values('$b_name','$bf_id')";
		$command=Yii::$app->db->createCommand($sql);
		$data=$command->query();
		if($data){
			return $this->redirect(['base/jqueryui']);
		}else{
			return $this->redirect(['base/jqueryui']);
		}
	}
	//递归
	public function digui($data,$path,$flage){
        static $arr=array();
        foreach($data as $k=>$v){
            if($v['bf_id']==$path){
                $v['flage']=$flage;
                $arr[]=$v;
                $this->digui($data,$v['b_id'],$flage+1);
            }
        }
        return $arr;
    }
	//删除类型(最底层的标签)
	public function actionBasedel(){
		$request = Yii::$app->request;
		$id = $request->post('id');
		$sql="select * from base where bf_id='$id'";
		$command=Yii::$app->db->createCommand($sql);
		$data=$command->queryAll();
		if($data){
			echo 1;
		}else{
			$sql="delete from base where b_id='$id'";
			$command=Yii::$app->db->createCommand($sql);
			$data=$command->query();
			echo 2;
		}
	}
	//删除类型(下面有分类的标签)
	public function actionBasedelall(){
		$request = Yii::$app->request;
		$id = $request->post('id');
		$sql="delete from base where b_id='$id' or bf_id='$id'";
		$command=Yii::$app->db->createCommand($sql);
		$data=$command->query();
		echo 3;
	}
}
