<?php

namespace app\models;


use yii\base\InvalidConfigException;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * Class File
 * @package app\models
 */
class File extends ActiveRecord
{
    public static function tableName()
    {
        return 'public.{{%files}}';
    }

    /**
     * @return ActiveQuery
     * @throws InvalidConfigException
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['id' => 'id_book'])
            ->viaTable('public.{{%book-file}}', ['id_file' => 'id']);
    }

}