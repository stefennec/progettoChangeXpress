<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Valute]].
 *
 * @see Valute
 */
class ValuteQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Valute[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Valute|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
