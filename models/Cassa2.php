<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Cassa2".
 *
 * @property int $idValuta
 * @property int $valuta
 * @property string $quantita
 * @property string $controvalore
 * @property string $prezzoMedio
 * @property string $medioEuro
 */
class Cassa2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Cassa2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idValuta'], 'required'],
            [['idValuta', 'valuta'], 'integer'],
            [['quantita', 'controvalore', 'prezzoMedio', 'medioEuro'], 'number'],
            [['idValuta'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idValuta' => 'Id Valuta',
            'valuta' => 'Valuta',
            'quantita' => 'Quantita',
            'controvalore' => 'Controvalore',
            'prezzoMedio' => 'Prezzo Medio',
            'medioEuro' => 'Medio Euro',
        ];
    }

    /**
     * {@inheritdoc}
     * @return Cassa2Query the active query used by this AR class.
     */
    public static function find()
    {
        return new Cassa2Query(get_called_class());
    }
}
