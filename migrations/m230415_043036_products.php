<?php

use yii\db\Migration;

/**
 * Class m230415_043036_products
 */
class m230415_043036_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'photo' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'price' => $this->integer(),
            'countryorigin' => $this->string(),
            'release' => $this->date(),
            'model' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('products');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230415_043036_products cannot be reverted.\n";

        return false;
    }
    */
}
