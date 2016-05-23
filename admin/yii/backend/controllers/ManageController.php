<?php

namespace backend\controllers;
use Yii;
class ManageController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionAdds(){
    	return $this->renderPartial("form-elements.html");

    }
    public $enableCsrfValidation = false;
    /*
    添加管理员
    */
    public function actionInfo(){
    	$request = Yii::$app->request;
    	$name = $request->post('name');
    	$pwd=$request->post('pwd');
    	$tel = $request->post('tel');
    	$email = $request->post('email');
    	$state = $request->post('state');
    	$time = date("Y-m-d H:i:s");
    	$sql="insert into user_admin(u_name,u_pwd,u_tel,u_email,u_state,u_time) values('$name','$pwd','$tel','$email','$state','$time')";
    	//echo $sql;
    	$command=Yii::$app->db->createCommand($sql);
    	$data=$command->execute();
    	if($data){
    		Yii::$app->getSession()->setFlash('success', '添加成功');
		return $this->redirect(['manage/list']);
    	}else
    	{
    		Yii::$app->getSession()->setFlash('error', '添加失败');
		return $this->redirect(['manage/adds']);
    	}  	
    }
    /*
    管理员列表
    */
    public function actionList(){
    	$sql="select * from user_admin ";
    	$command=Yii::$app->db->createCommand($sql);
    	$res=$command->queryAll();
    	return  $this->renderPartial('tables.html',['res'=>$res]);
    }
    public function actionLock(){
		$request = Yii::$app->request;
		$id = $request->post('id');
		$state= $request->post('state');
		if($state==1){
			$sql="update user_admin set u_state=2 where u_id='$id'";
		}else
		{
			$sql="update user_admin set u_state=1 where u_id='$id'";
		}
		$command=Yii::$app->db->createCommand($sql);
		$data=$command->query();
	}
    
}
