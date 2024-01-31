<?php

/**
 * Team:对影成三人队
 * By li xiang
 * past table
 */

namespace common\models;

use Yii;

/**
 * This is the model class for table "past".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $details
 * @property string|null $path
 * @property string|null $time
 * @property string|null $introduction
 * @property string|null $title
 * @property string|null $weight
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'past';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['name', 'details', 'path', 'time', 'introduction', 'title', 'weight'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Level',
            'details' => 'Details',
            'path' => 'Path',
            'time' => 'Time',
            'introduction' => 'Introduction',
            'title' => 'Title',
            'weight' => 'Weight',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function getGTime()
    {
        return $this->time;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getIntroduction()
    {
        return $this->introduction;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * {@inheritdoc}
     * @return GalleryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GalleryQuery(get_called_class());
    }
}
