<?php

/**
 * Team:对影成三人队
 * By wukui
 * opinion table
 */

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * Opinion model
 *
 * @property integer $id
 * @property string $source_country
 * @property string $content
 * @property string $identity
 */
class Opinion extends ActiveRecord implements IdentityInterface
{

    public static function tableName()
    {
        return '{{%opinion}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    public function rules()
    {
        return [];
    }

    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    public static function findBySourceCountry($sourcecountry)
    {
        return static::findOne(['source_country' => $sourcecountry]);
    }

    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public function getAuthKey(){}

    public function validateAuthKey($authKey){}

    public function getSourceCountry()
    {
        return $this->source_country;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getIdentity()
    {
        return $this->identity;
    }
}