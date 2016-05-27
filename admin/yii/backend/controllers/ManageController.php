<?php

namespace backend\controllers;
use Yii;
use backend\models\UserAdmin;
use yii\web\UploadedFile;

class ManageController extends \yii\web\Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionAdds(){
		$session=Yii::$app->session;
		$name=$session->get('name');
		$model = new useradmin();
    	return $this->renderPartial("form-elements",array('model'=>$model,'name'=>$name));

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
    	$time = date("Y/m/d H/i/s");
		$model = new UserAdmin();

        if (Yii::$app->request->isPost) {
            $model->img = UploadedFile::getInstance($model, 'img');
            $model->upload();
        }
		
		$img=$_FILES['UserAdmin']['name']['img'];

    	$sql="insert into user_admin(u_name,u_pwd,u_tel,u_email,u_state,u_time,img) values('$name','$pwd','$tel','$email','$state','$time','$img')";
    	//echo $sql;
    	$command=Yii::$app->db->createCommand($sql);
    	$data=$command->execute();
    	if($data){
    		Yii::$app->getSession()->setFlash('success', '添加成功');
			return $this->redirect(['manage/list']);
    	}else
    	{
    		Yii::$app->getSession()->setFlash('error', '添加失败');
			return $this->redirect(['manage/adds'],['model'=>$model]);
    	}  	
    }
    /*
    管理员列表
    */
    public function actionList(){
		$session=Yii::$app->session;
		$name=$session->get('name');
    	$sql="select * from user_admin ";
    	$command=Yii::$app->db->createCommand($sql);
    	$res=$command->queryAll();
    	return  $this->renderPartial('tables.html',array('res'=>$res,'name'=>$name));
    }
    /*锁定*/
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
    /*批删*/
        public function actionDel(){
            $id=$_GET['id'];
            //echo $id;die;
            $sql="delete from user_admin where u_id in($id)";
            $data=Yii::$app->db->createCommand($sql);
            $res=$data->query();
            if($res){
                Yii::$app->getSession()->setFlash('success', '删除成功');
                    return $this->redirect(array('manage/list'));
            }else
            {
                Yii::$app->getSession()->setFlash('error', '删除失败');
                    return $this->redirect(array('manage/list'));
            }
        }
    
}
