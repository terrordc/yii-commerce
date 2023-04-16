<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%carts}}`.
 */
class m230416_133503_create_carts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%carts}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);

        $this->createIndex(
            'idx-carts-user_id',
            'carts',
            'user_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-carts-user_id',
            'carts',
            'user_id',
            'users',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-carts-user_id',
            'carts'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-carts-user_id',
            'carts'
        );
        
        $this->dropTable('{{%carts}}');
    }
}
