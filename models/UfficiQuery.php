<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Uffici]].
 *
 * @see Uffici
 */
class UfficiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Uffici[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Uffici|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
