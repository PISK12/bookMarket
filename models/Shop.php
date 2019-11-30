<?php


namespace app\models;


use yii\db\ActiveRecord;

/**
 * Class Shop
 * @package app\models
 */
class Shop extends ActiveRecord
{
    public static function tableName()
    {
        return 'public.{{%shops}}';
    }

}