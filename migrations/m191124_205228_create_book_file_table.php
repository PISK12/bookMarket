<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book_file}}`.
 */
class m191124_205228_create_book_file_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book-file}}', [
            'id_book' => $this->integer(),
            'id_file' => $this->integer(),
        ]);

        $this->addPrimaryKey('book-file_pk', '{{%book-file}}', ['id_book', 'id_file']);
        $this->addForeignKey('fk_book-file-id_book', '{{%book-file}}', 'id_book', '{{%books}}', 'id', 'CASCADE', 'NO ACTION');
        $this->addForeignKey('fk_book-file-id_file', '{{%book-file}}', 'id_file', '{{%files}}', 'id', 'CASCADE', 'NO ACTION');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book-file}}');
    }
}
