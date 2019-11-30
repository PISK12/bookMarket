<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book_author}}`.
 */
class m191124_205248_create_book_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book-author}}', [
            'id_book' => $this->integer(),
            'id_author' => $this->integer(),
        ]);

        $this->addPrimaryKey('book-author_pk', '{{%book-author}}', ['id_book', 'id_author']);
        $this->addForeignKey('fk_book-author-id_book', '{{%book-author}}', 'id_book', '{{%books}}', 'id', 'CASCADE', 'NO ACTION');
        $this->addForeignKey('fk_book-author-id_author', '{{%book-author}}', 'id_author', '{{%authors}}', 'id', 'CASCADE', 'NO ACTION');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book-author}}');
    }
}
