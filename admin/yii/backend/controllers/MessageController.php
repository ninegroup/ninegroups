<?php

namespace backend\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use backend\models\Report;

class MessageController extends \yii\web\Controller
{
	//审核已完成列表(包括通过的和没通过的)

	public function actionList(){
		$session=Yii::$app->session;
		$name=$session->get('name');
		
		//接受搜索的值
		$request=Yii::$app->request;
		$search=$request->get('search')?$request->get('search'):'';

		$query = Report::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->where("r_state=2 or r_state=3 and r_h_id like '%$search%'")->count(),
        ]);

        $countries = $query->where("r_state=2 or r_state=3 and r_h_id like '%$search%'")
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
	
		return $this->renderPartial('message_list', [
			'name'=>$name,
            'countries' => $countries,
            'pagination' => $pagination,
			'search'=>$search,
        ]);
	}

	//待审核列表

	public function actionCheckill(){
		$session=Yii::$app->session;
		$name=$session->get('name');
		
		//分页
		$query = Report::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->where("r_state=0")->count(),
        ]);

        $countries = $query->where("r_state=0")
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
	
		return $this->renderPartial('checkill', [
			'name'=>$name,
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
	}
	

	//点击开始审核,跳该方法,将state字段改为审核中
	public function actionCheckbegin(){
		$request=Yii::$app->request;
		$id=$request->get('id');
		$re=Yii::$app->db->createCommand()->update('report',['r_state'=>1],"r_id=:id",[':id'=> $id])->execute();

		Yii::$app->getSession()->setFlash('success', '开始审核...');
		return $this->redirect(['message/checking']);	
	}
	
	//审核中列表
	public function actionChecking(){
		$session=Yii::$app->session;
		$name=$session->get('name');

		//分页
		$query = Report::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->where("r_state=1")->count(),
        ]);

        $countries = $query->where("r_state=1")
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
	
		return $this->renderPartial('checking', [
			'name'=>$name,
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
	}
	
	//将状态值改为相对应的审核结果
	public function actionCheck_ing(){
		$request=Yii::$app->request;
		$id=$request->get('id');
		$state=$request->get('state');

		$re=Yii::$app->db->createCommand()->update('report',['r_state'=>$state],"r_id=:id",[':id'=> $id])->execute();
		Yii::$app->getSession()->setFlash('success', '开始审核...');
		return $this->redirect(['message/list']);
	}

}
