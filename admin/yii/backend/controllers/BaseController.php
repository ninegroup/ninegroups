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
		$session=Yii::$app->session;
		$name=$session->get('name');
		 $rows= (new \yii\db\Query())
        ->select(['*'])
        ->from('base')
        ->all();
		$arr=$this->digui($rows,0,0);
		return $this->renderPartial('jquery-ui.html',array('arr'=>$arr,'name'=>$name));
    }
	//跳转类型列表
	public function actionNestablelist(){
		$session=Yii::$app->session;
		$name=$session->get('name');
		$rows= (new \yii\db\Query())
        ->select(['*'])
        ->from('base')
        ->all();
		$arr=$this->digui($rows,0,0);
		return $this->renderPartial('nestable-list.html',array('arr'=>$arr,'name'=>$name));
	}
	//添加类型
	public function actionBaseadd(){
		$request = Yii::$app->request;
		$bf_id = $request->post('bf_id');
		$b_name = $request->post('b_name');
		$connection=Yii::$app->db;
		$data=$connection->createCommand()->insert('base', [
			'b_name' => "$b_name",
			'bf_id' => $bf_id,
		])->execute();
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
		$data= (new \yii\db\Query())
        ->select(['*'])
        ->from('base')
		->where("bf_id = '$id'")
        ->all();
		if($data){
			echo 1;
		}else{
			$connection=Yii::$app->db;
			$connection->createCommand()->delete('base', "b_id = '$id'")->execute();
			echo 2;
		}
	}
	//删除类型(下面有分类的标签)
	public function actionBasedelall(){
		$request = Yii::$app->request;
		$id = $request->post('id');
		$connection=Yii::$app->db;
		$data=$connection->createCommand()->delete('base', "b_id = '$id' or bf_id='$id'")->execute();
		echo 3;
	}
}
