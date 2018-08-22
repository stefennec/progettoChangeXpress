<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "province".
 *
 * @property int $id_province
 * @property string $nome_province
 * @property string $sigla_province
 * @property string $regione_province
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome_province', 'sigla_province'], 'required'],
            [['nome_province', 'regione_province'], 'string', 'max' => 128],
            [['sigla_province'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_province' => 'Id Province',
            'nome_province' => 'Nome Province',
            'sigla_province' => 'Sigla Province',
            'regione_province' => 'Regione Province',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ProvinceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProvinceQuery(get_called_class());
    }
}
