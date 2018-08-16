<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Supporti".
 *
 * @property int $id
 * @property string $nome
 * @property string $commissioneDefault
 */
class Supporti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Supporti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['commissioneDefault'], 'required'],
            [['commissioneDefault'], 'number'],
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
            'commissioneDefault' => 'Commissione Default',
        ];
    }

    /**
     * {@inheritdoc}
     * @return SupportiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SupportiQuery(get_called_class());
    }
}
