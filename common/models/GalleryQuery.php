<?php

/**
 * Team:对影成三人队
 * By li xiang
 * past query func
 */

namespace common\models;

/**
 * This is the ActiveQuery class for [[Past]].
 *
 * @see Gallery
 */
class GalleryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Gallery[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Gallery|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
