<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Cassa1]].
 *
 * @see Cassa1
 */
class Cassa1Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Cassa1[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Cassa1|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
