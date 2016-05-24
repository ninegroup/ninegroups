<?php
namespace backend\controllers;
use Yii;

use yii\web\Controller;
class BaseController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;
	public function actionJqueryui()
    {
		$sql="select * from base";
		$command=Yii::$app->db->createCommand($sql);
		$data=$command->queryAll();
		$arr=$this->digui($data,0,0);
		return $this->renderPartial('jquery-ui.html',array('arr'=>$arr));
    }
	public function actionNestablelist(){
		$sql="select * from base";
		$command=Yii::$app->db->createCommand($sql);
		$data=$command->queryAll();
		$arr=$this->digui($data,0,0);
		return $this->renderPartial('nestable-list.html',array('arr'=>$arr));
	}
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
	public function actionBasedelall(){
		$request = Yii::$app->request;
		$id = $request->post('id');
		$sql="delete from base where b_id='$id' or bf_id='$id'";
		$command=Yii::$app->db->createCommand($sql);
		$data=$command->query();
		echo 3;
	}
}
