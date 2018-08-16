<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TagliEuro]].
 *
 * @see TagliEuro
 */
class TagliEuroQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TagliEuro[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TagliEuro|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
