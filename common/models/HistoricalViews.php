<?php

/**
 * Team:对影成三人队
 * By lixiang
 * history traffic 
 */

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%historical_views}}".
 *
 * @property int $id
 * @property string|null $time
 * @property int|null $count
 */
class HistoricalViews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%historical_views}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['time'], 'safe'],
            [['count'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'time' => 'Time',
            'count' => 'Count',
        ];
    }

    /**
     * {@inheritdoc}
     * @return HistoricalViewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HistoricalViewsQuery(get_called_class());
    }
}
