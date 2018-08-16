<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TipologiaNazioni".
 *
 * @property int $id
 * @property string $tipologia
 */
class TipologiaNazioni extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TipologiaNazioni';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipologia'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipologia' => 'Tipologia',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TipologiaNazioniQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TipologiaNazioniQuery(get_called_class());
    }
}
