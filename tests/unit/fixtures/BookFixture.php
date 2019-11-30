<?php


namespace app\tests\unit\fixtures;


use yii\test\ActiveFixture;

class BookFixture extends ActiveFixture
{
    public $modelClass = 'app\models\Book';
    public $depends = ['app\tests\unit\fixtures\AuthorFixture', 'app\tests\unit\fixtures\ShopFixture', 'app\tests\unit\fixtures\PublisherFixture'];
}