<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Operatori".
 *
 * @property int $id
 * @property string $user
 * @property string $password
 */
class Operatori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Operatori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'password'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
            'password' => 'Password',
        ];
    }

    /**
     * {@inheritdoc}
     * @return OperatoriQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OperatoriQuery(get_called_class());
    }
}
