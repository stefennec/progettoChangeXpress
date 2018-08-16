<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Cambi]].
 *
 * @see Cambi
 */
class CambiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Cambi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Cambi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
