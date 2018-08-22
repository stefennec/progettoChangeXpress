<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Cassaforte]].
 *
 * @see Cassaforte
 */
class CassaforteQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Cassaforte[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Cassaforte|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
