<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Operatori]].
 *
 * @see Operatori
 */
class OperatoriQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Operatori[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Operatori|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
