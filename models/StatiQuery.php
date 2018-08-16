<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Stati]].
 *
 * @see Stati
 */
class StatiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Stati[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Stati|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
