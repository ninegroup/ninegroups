<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "report".
 *
 * @property integer $r_id
 * @property string $r_u_id
 * @property string $r_h_id
 * @property string $r_content
 * @property string $r_state
 * @property string $r_h_name
 */
class Report extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'report';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['r_content'], 'string'],
            [['r_u_id', 'r_h_id'], 'string', 'max' => 80],
            [['r_state', 'r_h_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'r_id' => 'R ID',
            'r_u_id' => 'R U ID',
            'r_h_id' => 'R H ID',
            'r_content' => 'R Content',
            'r_state' => 'R State',
            'r_h_name' => 'R H Name',
        ];
    }
}
