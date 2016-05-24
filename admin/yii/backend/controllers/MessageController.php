<?php

namespace backend\controllers;
use Yii;
class MessageController extends \yii\web\Controller
{
	//审核已完成列表(包括通过的和没通过的)

	public function actionList(){
		$session=Yii::$app->session;
		$name=$session->get('name');
		$sql=Yii::$app->db->createCommand("select * from report where r_state=2 or r_state=3");
		$re=$sql->queryAll();
		return $this->renderPartial('message_list',array('name'=>$name,'content'=>$re));
	}

	public function actionCheckill(){
		$session=Yii::$app->session;
		$name=$session->get('name');
		$sql=Yii::$app->db->createCommand("select * from report where r_state=0");
		$re=$sql->queryAll();
		return $this->renderPartial('checkill',array('name'=>$name,'content'=>$re));
	}

	public function actionCheckbegin(){
		$request=Yii::$app->request;
		$id=$request->get('id');
		$re=Yii::$app->db->createCommand()->update('report',['r_state'=>1],"r_id=:id",[':id'=> $id])->execute();

		Yii::$app->getSession()->setFlash('success', '开始审核...');
		return $this->redirect(['message/checking']);	
	}

	public function actionChecking(){
		$session=Yii::$app->session;
		$name=$session->get('name');
		$sql=Yii::$app->db->createCommand("select * from report where r_state=1");
		$re=$sql->queryAll();
		return $this->renderPartial('checking',array('name'=>$name,'content'=>$re));
	}

	public function actionCheck_ing(){
		$request=Yii::$app->request;
		$id=$request->get('id');
		$state=$request->get('state');

		$re=Yii::$app->db->createCommand()->update('report',['r_state'=>$state],"r_id=:id",[':id'=> $id])->execute();
		Yii::$app->getSession()->setFlash('success', '开始审核...');
		return $this->redirect(['message/list']);
	}

}
