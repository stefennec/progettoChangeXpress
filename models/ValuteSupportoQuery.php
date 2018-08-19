<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ValuteSupporto]].
 *
 * @see ValuteSupporto
 */
class ValuteSupportoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ValuteSupporto[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ValuteSupporto|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
