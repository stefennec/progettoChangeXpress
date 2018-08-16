<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Enti]].
 *
 * @see Enti
 */
class EntiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Enti[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Enti|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
