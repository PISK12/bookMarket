<?php


namespace app\models;


use yii\db\ActiveRecord;

/**
 * Class Shop
 * @package app\models
 * @property string $id [integer]
 * @property string $name [varchar(255)]
 * @property string $url [varchar(255)]
 */
class Shop extends ActiveRecord
{
    public static function tableName()
    {
        return 'public.{{%shops}}';
    }

}