<?php

/**
 * Team:对影成三人队
 * By wukui
 * faq query func
 */

namespace common\models;

/**
 * This is the ActiveQuery class for [[Faq]].
 *
 * @see Faq
 */
class FaqQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Faq[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Faq|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
