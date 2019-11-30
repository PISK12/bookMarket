<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%publishers}}`.
 */
class m191124_204822_create_publishers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%publishers}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%publishers}}');
    }
}
