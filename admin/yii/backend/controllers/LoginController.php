<?php
namespace backend\controllers;
use Yii;
use yii\data\Pagination;
use backend\models\User;

use yii\web\Controller;
class LoginController extends \yii\web\Controller
{
	public function actionIndex()
    {
		$session = Yii ::$app->session;
		$name=$session->get('name');
		$pwd=$session->get('pwd');
		if($pwd){
			return $this->renderPartial('login.html',array('name'=>$name,'pwd'=>$pwd));
		}
		return $this->renderPartial('login.html',array('name'=>$name,'pwd'=>$pwd));
    }
	public $enableCsrfValidation = false;

	/*登陆*/
	public function actionInfo(){
		$request = Yii::$app->request;
		$name = $request->post('name');
		$pwd = $request->post('pwd');
		$remember= $request->post('remember');

		$sql="select * from user_admin where u_name='$name'";
		$command=Yii::$app->db->createCommand($sql);
		$data=$command->queryOne();
		if($data){
				if($data['u_pwd']==$pwd){
					//把当前登录人存入session
					$session = Yii ::$app->session;
					$session->open();
					$session->set('name',$name);

					//判断记住密码框是否选中
					if($remember){					
						$session->set('pwd',"$pwd");
					}
					Yii::$app->getSession()->setFlash('success', '登陆成功');
					return $this->redirect(['login/list']);
				}else
				{
					Yii::$app->getSession()->setFlash('error', '密码错误');
					return $this->render('index');
				}
		}else
		{		
			Yii::$app->getSession()->setFlash('error', '用户名不存在');
			return $this->render('index');
		}
	}

	//退出
	public function actionExit(){
		$session=Yii::$app->session;
		unset ($session['name']);
		unset ($session['pwd']);
		Yii::$app->getSession()->setFlash('success','退出成功');
		return $this->redirect(['login/index']);
	}
	public function actionList()
    {
		$session=Yii::$app->session;
		$name=$session->get('name');
        return $this->renderPartial('index.html',array('name'=>$name));
    }

    
	/**/
	public function actionTable()
    {
		$query = User::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->where("u_owner='1'")->count(),
        ]);

        $countries = $query->where("u_owner='1'")->orderBy('u_time desc')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
		//$sql="select * from user where u_owner=2";
		//$command=Yii::$app->db->createCommand($sql);
		//$data=$command->queryAll();
		//var_dump($data);die;	
        
		//$sql="select * from user";
		//$command=Yii::$app->db->createCommand($sql);
		//$data=$command->queryAll();
		//var_dump($data);die;	
        return $this->renderPartial('tables.html',['countries' => $countries,
            'pagination' => $pagination,]);
    }

	public function actionAdds(){
		return $this->renderPartial('form-elements.html');
	}
	public function actionLock(){
		$request = Yii::$app->request;
		$id = $request->post('id');
		$state= $request->post('state');
		if($state==1){
			$sql="update user set u_state=2 where u_id='$id'";
		}else
		{
			$sql="update user set u_state=1 where u_id='$id'";
		}
		$command=Yii::$app->db->createCommand($sql);
		$data=$command->query();
	}
	public function actionFormowner(){
		$query = User::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->where("u_owner='2'")->count(),
        ]);

        $countries = $query->where("u_owner='2'")->orderBy('u_time desc')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
		//$sql="select * from user where u_owner=2";
		//$command=Yii::$app->db->createCommand($sql);
		//$data=$command->queryAll();
		//var_dump($data);die;	
        return $this->renderPartial('form-owner.html',[
			'countries' => $countries,
            'pagination' => $pagination,
			]);
	}
	
	//展示个人信息
	public function actionProfile(){
		$session=Yii::$app->session;
		$name=$session->get('name');
		$a=Yii::$app->db->createCommand("select * from user_admin where u_name='$name'");
		$re=$a->queryOne();
		return $this->renderPartial('profile.html',array('content'=>$re,'name'=>$name));
	}
}
