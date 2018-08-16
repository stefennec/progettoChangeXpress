<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Documenti".
 *
 * @property int $id
 * @property string $nome
 */
class Documenti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Documenti';
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
     * @return DocumentiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DocumentiQuery(get_called_class());
    }
}
