<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Enti".
 *
 * @property int $id
 * @property string $nome
 */
class Enti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Enti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * {@inheritdoc}
     * @return EntiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EntiQuery(get_called_class());
    }
}
