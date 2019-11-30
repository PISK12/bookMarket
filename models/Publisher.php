<?php


namespace app\models;


use yii\db\ActiveRecord;

/**
 * Class Publisher
 * @package app\models
 */
class Publisher extends ActiveRecord
{
    public static function tableName()
    {
        return 'public.{{%publishers}}';
    }

}