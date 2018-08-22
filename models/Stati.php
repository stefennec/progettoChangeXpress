<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stati".
 *
 * @property int $id_stati
 * @property string $nome_stati
 * @property string $sigla_numerica_stati
 * @property string $sigla_iso_3166_1_alpha_3_stati
 * @property string $sigla_iso_3166_1_alpha_2_stati
 */
class Stati extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stati';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome_stati'], 'string', 'max' => 128],
            [['sigla_numerica_stati'], 'string', 'max' => 4],
            [['sigla_iso_3166_1_alpha_3_stati'], 'string', 'max' => 3],
            [['sigla_iso_3166_1_alpha_2_stati'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_stati' => 'Id Stati',
            'nome_stati' => 'Nome Stati',
            'sigla_numerica_stati' => 'Sigla Numerica Stati',
            'sigla_iso_3166_1_alpha_3_stati' => 'Sigla Iso 3166 1 Alpha 3 Stati',
            'sigla_iso_3166_1_alpha_2_stati' => 'Sigla Iso 3166 1 Alpha 2 Stati',
        ];
    }

    /**
     * {@inheritdoc}
     * @return StatiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StatiQuery(get_called_class());
    }

    public static function getStati(){
      return self::find()->select(['nome_stati', 'id_stati'])->indexBy('id_stati')->column();
    }
}
