<?php


namespace app\models;


use yii\db\ActiveRecord;

/**
 * Class Publisher
 * @package app\models
 * @property string $id [integer]
 * @property string $name [varchar(255)]
 */
class Publisher extends ActiveRecord
{
    public static function tableName()
    {
        return 'public.{{%publishers}}';
    }

}