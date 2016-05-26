<?php

namespace backend\models;

use Yii;

use yii\base\Model;
use yii\web\UploadedFile;


/**
 * This is the model class for table "user_admin".
 *
 * @property integer $u_id
 * @property string $u_name
 * @property string $u_pwd
 * @property string $u_power
 * @property string $u_tel
 * @property string $u_email
 * @property string $u_state
 * @property string $u_time
 */
class UserAdmin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_time'], 'safe'],
            [['u_name', 'u_pwd', 'u_power', 'u_tel', 'u_email', 'u_state'], 'string', 'max' => 255]
,            [['img'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg']        ];
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
            'u_power' => 'U Power',
            'u_tel' => 'U Tel',
            'u_email' => 'U Email',
            'u_state' => 'U State',
            'u_time' => 'U Time',
            'img' => 'Img',
        ];
    }

	public function upload()
    {
        if ($this->validate()) {
            $this->img->saveAs('uploads/' . $this->img->baseName . '.' . $this->img->extension);
            return true;
        } else {
            return false;
        }
    }

}
