<?php


namespace app\tests\unit\models;

use app\tests\unit\fixtures\ShopFixture;
use Codeception\Test\Unit;

class ShopTest extends Unit
{
    public function _fixtures()
    {
        return [
            'shops' => [
                'class' => ShopFixture::className(),
                'dataFile' => 'tests/unit/fixtures/data/shops.php'
            ]
        ];
    }
}