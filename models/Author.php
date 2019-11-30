<?php


namespace app\models;


use yii\base\InvalidConfigException;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * Class Author
 * @package app\models
 */
class Author extends ActiveRecord
{
    public static function tableName()
    {
        return 'public.{{%authors}}';
    }

    /**
     * @return ActiveQuery
     * @throws InvalidConfigException
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['id' => 'id_book'])
            ->viaTable('public.{{%book-author}}', ['id_book' => 'id']);
    }
}