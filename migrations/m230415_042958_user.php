<?php

use yii\db\Migration;
use yii\db\Expression;
/**
 * Class m230415_042958_user
 */
class m230415_042958_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'name'=> $this->string()->notNull(),
            'surname'=> $this->string()->notNull(),
            'patronymic'=> $this->string(),
            'login' => $this->string()->unique(),
            'email' => $this->string()->unique(),
            'password' => $this->string()->notNull(),
            'address' => $this->string(),
            'created_at' => $this->timestamp()->defaultValue(date('Y-m-d H:i:s')),
            'updated_at' => $this->timestamp()->defaultValue(date('Y-m-d H:i:s')),
            'admin' => $this->boolean()
        ]);
        


        $this->insert('users', [
            'id' => '1',
            'name' => 'гоги',
            'surname' => ' ярославов ',
            'patronymic' => ' петрович',
            'login' => 'admin',
            'email' => 'dasdas@mail.ru',
            'password' => 'adminWSR',
            'address'=> '',
            'created_at' => new Expression('NOW()'),
            'updated_at' => new Expression('NOW()'),
            'admin' => '1',
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230415_042958_user cannot be reverted.\n";

        return false;
    }
    */
}
