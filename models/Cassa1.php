<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Cassa1".
 *
 * @property int $idValuta
 * @property int $valuta
 * @property string $quantita
 * @property string $controvalore
 * @property string $prezzoMedio
 * @property string $medioEuro
 */
class Cassa1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Cassa1';
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
     * @return Cassa1Query the active query used by this AR class.
     */
    public static function find()
    {
        return new Cassa1Query(get_called_class());
    }
}
