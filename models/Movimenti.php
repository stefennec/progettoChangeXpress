<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Movimenti".
 *
 * @property int $id
 * @property int $provenienza
 * @property int $destinazione
 * @property int $valuta
 * @property string $quantitaValuta
 * @property string $dataMovimento
 * @property int $operatore
 */
class Movimenti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Movimenti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['provenienza', 'destinazione', 'valuta', 'operatore'], 'integer'],
            [['quantitaValuta'], 'number'],
            [['dataMovimento'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'provenienza' => 'Provenienza',
            'destinazione' => 'Destinazione',
            'valuta' => 'Valuta',
            'quantitaValuta' => 'Quantita Valuta',
            'dataMovimento' => 'Data Movimento',
            'operatore' => 'Operatore',
        ];
    }

    /**
     * {@inheritdoc}
     * @return MovimentiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MovimentiQuery(get_called_class());
    }
}
