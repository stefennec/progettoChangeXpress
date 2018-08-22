<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Documenti]].
 *
 * @see Documenti
 */
class DocumentiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Documenti[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Documenti|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
