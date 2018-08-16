<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Clienti]].
 *
 * @see Clienti
 */
class ClientiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Clienti[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Clienti|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
