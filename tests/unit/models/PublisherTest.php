<?php


namespace app\tests\unit\models;

use app\tests\unit\fixtures\PublisherFixture;
use Codeception\Test\Unit;

class PublisherTest extends Unit
{
    public function _fixtures()
    {
        return [
            'publishers' => [
                'class' => PublisherFixture::className(),
                'dataFile' => 'tests/unit/fixtures/data/publishers.php'
            ]
        ];
    }
}