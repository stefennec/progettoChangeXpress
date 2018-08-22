<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Cambi".
 *
 * @property int $id
 * @property int $valuta
 * @property string $descrizione
 * @property string $rateUfficialeAcquisto
 * @property string $rateUfficialeVendita
 * @property string $spreadAcquisto
 * @property string $spreadVendita
 * @property string $prezzoMedioAcquisto
 * @property string $prezzoMedioVendita
 */
class Cambi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Cambi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['valuta'], 'integer'],
            [['rateUfficialeAcquisto', 'rateUfficialeVendita', 'spreadAcquisto', 'spreadVendita', 'prezzoMedioAcquisto', 'prezzoMedioVendita'], 'number'],
            [['descrizione'], 'string', 'max' => 45],
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
            'descrizione' => 'Descrizione',
            'rateUfficialeAcquisto' => 'Rate Ufficiale Acquisto',
            'rateUfficialeVendita' => 'Rate Ufficiale Vendita',
            'spreadAcquisto' => 'Spread Acquisto',
            'spreadVendita' => 'Spread Vendita',
            'prezzoMedioAcquisto' => 'Prezzo Medio Acquisto',
            'prezzoMedioVendita' => 'Prezzo Medio Vendita',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CambiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CambiQuery(get_called_class());
    }
}
