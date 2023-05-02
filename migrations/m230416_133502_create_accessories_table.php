<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%accessories}}`.
 */
class m230416_133502_create_accessories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%accessories}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'created_at' => $this->timestamp()->defaultValue(date('Y-m-d H:i:s')),
            'updated_at' => $this->timestamp()->defaultValue(date('Y-m-d H:i:s')),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%accessories}}');
    }
}
