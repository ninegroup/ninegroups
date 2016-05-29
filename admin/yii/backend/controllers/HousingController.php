<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use backend\models\House;
use yii\data\Pagination;
/**
 * Site controller
 */
class HousingController extends Controller
{
	public $enableCsrfValidation = false;
	/*房源列表*/
	public function actionList()
	{
		$request = Yii::$app->request;
    		$sou = $request->get('sou')?$request->get('sou'):'';
		$query = House::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->where("h_state=1 and h_title like '%$sou%'")->count(),
        ]);

        $countries = $query->where("h_state=1")
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->where("h_title like '%$sou%'")
            ->all();
        return $this->renderPartial('houselist',['countries' => $countries,
            'pagination' => $pagination,'sou'=>$sou,]);
	}
	/*房源删除*/
	public function actionDel()
	{
		$id=$_GET['id'];
		// echo $id;die;
		$db=Yii::$app->db->createCommand("delete from house where h_id='$id'")->execute();
		if($db)
		{
			echo "<script>location.href='index.php?r=housing/list'</script>";
		}else{
			echo "<script>location.href='index.php?r=housing/list'</script>";
		}
	}
}
