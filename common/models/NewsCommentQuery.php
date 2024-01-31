<?php

/**
 * Team:对影成三人队
 * By wukui
 * news comment query func
 */

namespace common\models;

/**
 * This is the ActiveQuery class for [[NewsComment]].
 *
 * @see NewsComment
 */
class NewsCommentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return NewsComment[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NewsComment|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
