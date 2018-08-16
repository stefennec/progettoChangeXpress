<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Sesso]].
 *
 * @see Sesso
 */
class SessoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Sesso[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Sesso|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
