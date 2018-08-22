<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Valute_Supporto".
 *
 * @property int $id
 * @property int $valuta
 * @property int $supporto
 */
class ValuteSupporto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Valute_Supporto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['valuta', 'supporto'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'valuta' => 'Valuta',
            'supporto' => 'Supporto',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ValuteSupportoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ValuteSupportoQuery(get_called_class());
    }
}
