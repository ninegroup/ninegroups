<?php
namespace backend\controllers;
use Yii;
use yii\data\Pagination;
use backend\models\User;
use backend\models\House;

use yii\web\Controller;
class LoginController extends \yii\web\Controller
{
	//public $layout=false;
	/*登陆*/
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

	/*登陆判断*/
	public function actionInfo(){
		$request = Yii::$app->request;
		$name = $request->post('name');
		$pwd = $request->post('pwd');
		$remember= $request->post('remember');

		$sql="select * from user_admin where u_name='$name' ";
		$command=Yii::$app->db->createCommand($sql);
		$data=$command->queryOne();

		/*是否记住密码*/
		if($data){
			if($data['u_state']==1){
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
				}else{
					Yii::$app->getSession()->setFlash('error', '密码错误');
					return $this->render('index');
				}
			}else{
				Yii::$app->getSession()->setFlash('error', '用户已锁定，请使用其他管理员账号登陆');
				return $this->render('index');
			}
		}else{		
			Yii::$app->getSession()->setFlash('error', '用户名不存在');
			return $this->render('login.html');
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
	/*显示主页面*/
	public function actionList()
    {
		$session=Yii::$app->session;
		$name=$session->get('name');
        return $this->renderPartial('index.html',array('name'=>$name));
    }

    
	/*用户列表*/
	public function actionTable()
    {
    		$request = Yii::$app->request;
    		$sou = $request->get('sou')?$request->get('sou'):'';
		$query = User::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->where("u_owner='1' and u_name like '%$sou%'")->count(),
        ]);

        $countries = $query->where("u_owner='1'")->orderBy('u_time desc')
            ->offset($pagination->offset)
              ->where("u_name like '%$sou%'")
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
            'pagination' => $pagination,'sou'=>$sou]);
    }

	public function actionAdds(){
		return $this->renderPartial('form-elements.html');
	}
	/*锁定*/
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
	/*房主列表*/
	public function actionFormowner(){
		$request = Yii::$app->request;
    		$sou = $request->get('sou')?$request->get('sou'):'';
		$query = User::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->where("u_owner='2' and u_name like '%$sou%'")->count(),
        ]);

        $countries = $query->where("u_owner='2'")->orderBy('u_time desc')
            ->offset($pagination->offset)
             ->where("u_name like '%$sou%'")
            ->limit($pagination->limit)
            ->all();
		//$sql="select * from user where u_owner=2";
		//$command=Yii::$app->db->createCommand($sql);
		//$data=$command->queryAll();
		//var_dump($data);die;	
        return $this->renderPartial('form-owner.html',[
			'countries' => $countries,
            'pagination' => $pagination,
            'sou' => $sou,
			]);
	}
	
	//展示个人信息
	public function actionProfile(){
		$session=Yii::$app->session;
		$name=$session->get('name');
		$a=Yii::$app->db->createCommand("select * from user_admin where u_name='$name'");
		$re=$a->queryOne();
		$img=$re['img'];
		//var_dump($re);die;
		return $this->renderPartial('profile',array('content'=>$re,'name'=>$name,'img'=>$img));

	
	}

	//删除已锁定的用户
	public function actionUserdel(){
		$request=Yii::$app->request;
		$id=$request->post('id');
		$re=Yii::$app->db->createCommand()->delete('user',"u_id=:id",[':id'=>$id])->execute();
		if($re){
			echo 1;
		}else{
			echo 2;
		}
		
	}
	/*房源审核添加*/
	public function actionAdd_house(){
		$session=Yii::$app->session;
		$name=$session->get('name');
		$query = House::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->where("h_state='0'")->count(),
        ]);

        $countries = $query->where("h_state='0'")
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->renderPartial('house-add.html', [
            'countries' => $countries,
            'pagination' => $pagination,
			'name'=>$name,
        ]);

	}
	//审核通过
	public function actionPass(){
		$request = Yii::$app->request;
		$id = $request->get('id');
		// var_dump($id);die;
		$update=Yii::$app->db->createCommand("update house set h_state=1 where h_id='$id'")->execute();
		// var_dump($update);die;
		if($update){
			echo 1;
		}
	}
	//审核不通过
	public function actionNopass(){
		$request = Yii::$app->request;
		$id = $request->get('id');
		// var_dump($id);die;
		$update=Yii::$app->db->createCommand("update house set h_state=2 where h_id='$id'")->execute();
		// var_dump($update);die;
		if($update){
			echo 1;
		} 
	}
}
