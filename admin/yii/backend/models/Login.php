<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $u_id
 * @property string $u_name
 * @property string $u_pwd
 * @property string $u_sex
 * @property string $u_idcard
 * @property integer $u_tel
 * @property string $u_owner
 */
class Login extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_tel'], 'integer'],
            [['u_name'], 'string', 'max' => 255],
            [['u_pwd'], 'string', 'max' => 32],
            [['u_sex'], 'string', 'max' => 4],
            [['u_idcard'], 'string', 'max' => 18],
            [['u_owner'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'u_id' => 'U ID',
            'u_name' => 'U Name',
            'u_pwd' => 'U Pwd',
            'u_sex' => 'U Sex',
            'u_idcard' => 'U Idcard',
            'u_tel' => 'U Tel',
            'u_owner' => 'U Owner',
        ];
    }
}
