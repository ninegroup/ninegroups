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
}
