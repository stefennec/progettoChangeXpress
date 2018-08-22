<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TransazioniClienti]].
 *
 * @see TransazioniClienti
 */
class TransazioniClientiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TransazioniClienti[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TransazioniClienti|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
