<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Supporti]].
 *
 * @see Supporti
 */
class SupportiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Supporti[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Supporti|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
