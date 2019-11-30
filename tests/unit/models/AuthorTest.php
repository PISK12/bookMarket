<?php


namespace app\tests\unit\models;

use app\tests\unit\fixtures\AuthorFixture;
use Codeception\Test\Unit;

class AuthorTest extends Unit
{
    public function _fixtures()
    {
        return [
            'authors' => [
                'class' => AuthorFixture::className(),
                'dataFile' => 'tests/unit/fixtures/data/authors.php'
            ]
        ];
    }
}