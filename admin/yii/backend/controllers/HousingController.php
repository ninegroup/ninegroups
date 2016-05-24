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
	/*房源列表*/
	public function actionList()
	{
		$query = House::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->where("h_state=1")->count(),
        ]);

        $countries = $query->where("h_state=1")
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->renderPartial('houselist',['countries' => $countries,
            'pagination' => $pagination,]);
	}
	/*房源删除*/
	public function actionDel()
	{
		$id=$_GET['id'];
		//echo $id;die;
		$db=Yii::$app->db->createCommand("delete from house where h_id='$id'")->execute();
		if($db)
		{
			echo "<script>alert('删除成功');location.href='index.php?r=housing/list'</script>";
		}else{
			echo "<script>alert('删除失败');location.href='index.php?r=housing/list'</script>";
		}
	}
}
