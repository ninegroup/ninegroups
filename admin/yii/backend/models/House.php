<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "house".
 *
 * @property integer $h_id
 * @property integer $u_id
 * @property string $h_title
 * @property string $h_price
 * @property string $h_content
 * @property string $h_message
 * @property string $h_mating
 * @property string $h_charge
 * @property string $h_checkin
 * @property string $h_city
 * @property string $h_site
 * @property string $h_state
 */
class House extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'house';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_id'], 'integer'],
            [['h_price'], 'number'],
            [['h_content'], 'string'],
            [['h_title', 'h_message', 'h_mating', 'h_charge', 'h_checkin', 'h_city', 'h_site', 'h_state'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'h_id' => 'H ID',
            'u_id' => 'U ID',
            'h_title' => 'H Title',
            'h_price' => 'H Price',
            'h_content' => 'H Content',
            'h_message' => 'H Message',
            'h_mating' => 'H Mating',
            'h_charge' => 'H Charge',
            'h_checkin' => 'H Checkin',
            'h_city' => 'H City',
            'h_site' => 'H Site',
            'h_state' => 'H State',
        ];
    }
}
