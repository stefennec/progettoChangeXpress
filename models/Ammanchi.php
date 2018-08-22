<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ammanchi".
 *
 * @property int $id
 * @property string $quantitaAmmanco
 * @property int $valutaAmmanco
 * @property int $operatore
 */
class Ammanchi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Ammanchi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantitaAmmanco'], 'number'],
            [['valutaAmmanco', 'operatore'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quantitaAmmanco' => 'Quantita Ammanco',
            'valutaAmmanco' => 'Valuta Ammanco',
            'operatore' => 'Operatore',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AmmanchiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AmmanchiQuery(get_called_class());
    }
}
