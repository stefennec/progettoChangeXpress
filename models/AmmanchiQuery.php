<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Ammanchi]].
 *
 * @see Ammanchi
 */
class AmmanchiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Ammanchi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Ammanchi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
