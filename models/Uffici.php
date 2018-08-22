<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Uffici".
 *
 * @property int $id
 * @property string $nome
 * @property string $indirizzo
 * @property string $telefono
 */
class Uffici extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Uffici';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'indirizzo'], 'string', 'max' => 255],
            [['telefono'], 'string', 'max' => 45],
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
            'indirizzo' => 'Indirizzo',
            'telefono' => 'Telefono',
        ];
    }

    /**
     * {@inheritdoc}
     * @return UfficiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UfficiQuery(get_called_class());
    }
}
