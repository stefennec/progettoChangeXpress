<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Transazioni_Clienti".
 *
 * @property int $id
 * @property int $transazione
 * @property int $cliente
 */
class TransazioniClienti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Transazioni_Clienti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transazione', 'cliente'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'transazione' => 'Transazione',
            'cliente' => 'Cliente',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TransazioniClientiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TransazioniClientiQuery(get_called_class());
    }
}
