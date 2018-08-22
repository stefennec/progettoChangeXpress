<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Valute".
 *
 * @property int $id
 * @property string $nome
 * @property string $isoCode
 * @property string $RateUfficialeAcquisto
 * @property string $RateUfficialeVendita
 * @property string $imgBandiera
 */
class Valute extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Valute';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['RateUfficialeAcquisto', 'RateUfficialeVendita', 'imgBandiera'], 'required'],
            [['RateUfficialeAcquisto', 'RateUfficialeVendita'], 'number'],
            [['nome', 'imgBandiera'], 'string', 'max' => 255],
            [['isoCode'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'isoCode' => 'Iso Code',
            'RateUfficialeAcquisto' => 'Rate Ufficiale Acquisto',
            'RateUfficialeVendita' => 'Rate Ufficiale Vendita',
            'imgBandiera' => 'Img Bandiera',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ValuteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ValuteQuery(get_called_class());
    }
}
