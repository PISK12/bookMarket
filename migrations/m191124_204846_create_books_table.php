<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%books}}`.
 */
class m191124_204846_create_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%books}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'id_publisher' => $this->integer(),
            'id_shop' => $this->integer(),
        ]);

        $this->addForeignKey('fk_books_id_publisher', '{{%books}}', 'id_publisher', '{{%authors}}', 'id', 'SET NULL');
        $this->addForeignKey('fk_books_id_shop', '{{%books}}', 'id_shop', '{{%shops}}', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%books}}');
    }
}
