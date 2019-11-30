<?php


namespace app\tests\unit\models;

use app\tests\unit\fixtures\BookFixture;
use Codeception\Test\Unit;

class BookTest extends Unit
{
    public function _fixtures()
    {
        return [
            'books' => [
                'class' => BookFixture::className(),
                'dataFile' => 'tests/unit/fixtures/data/books.php'
            ]
        ];
    }
}