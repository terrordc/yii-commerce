<?php

use yii\db\Migration;

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
            'fio' => $this->string()->notNull(),
            'login' => $this->string()->unique(),
            'email' => $this->string()->unique(),
            'password' => $this->string(),
            'admin' => $this->boolean()
        ]);
        
        $this->insert('users', [
            'id' => '1',
            'fio' => 'врфыгшрв гврфышгв рфышгр',
            'login' => 'admin',
            'email' => 'dasdas@mail.ru',
            'password' => 'adminWSR',
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
