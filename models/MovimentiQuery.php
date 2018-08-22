<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Movimenti]].
 *
 * @see Movimenti
 */
class MovimentiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Movimenti[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Movimenti|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
