<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TagliEuro".
 *
 * @property int $id
 * @property string $taglio
 */
class TagliEuro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TagliEuro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['taglio'], 'required'],
            [['taglio'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'taglio' => 'Taglio',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TagliEuroQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TagliEuroQuery(get_called_class());
    }
}
