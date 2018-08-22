<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Cassa2]].
 *
 * @see Cassa2
 */
class Cassa2Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Cassa2[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Cassa2|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
