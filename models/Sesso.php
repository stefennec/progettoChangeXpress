<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Sesso".
 *
 * @property int $id
 * @property string $sesso
 */
class Sesso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Sesso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sesso'], 'required'],
            [['sesso'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sesso' => 'Sesso',
        ];
    }

    /**
     * {@inheritdoc}
     * @return SessoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SessoQuery(get_called_class());
    }
}
