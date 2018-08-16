<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Banche".
 *
 * @property int $id
 * @property string $nome
 */
class Banche extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Banche';
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
     * @return BancheQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BancheQuery(get_called_class());
    }
}
