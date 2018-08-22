<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Comuni]].
 *
 * @see Comuni
 */
class ComuniQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Comuni[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Comuni|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
