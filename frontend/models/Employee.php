<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property string $Name
 * @property integer $Age
 * @property string $Address
 * @property integer $Email
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Age', 'Address', 'Email'], 'required'],
            [['Age', 'Email'], 'integer'],
            [['Name'], 'string', 'max' => 50],
            [['Address'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Name' => Yii::t('app', 'Name'),
            'Age' => Yii::t('app', 'Age'),
            'Address' => Yii::t('app', 'Address'),
            'Email' => Yii::t('app', 'Email'),
        ];
    }
}
