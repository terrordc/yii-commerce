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
            'image_url' => $this->string(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
            'category_id' => $this->integer()->notNull(),
            'specifications' => $this->text(),
            'warranty' => $this->integer(),
            'price' => $this->integer()->notNull(),
            'countryorigin' => $this->string(),
            'quantity' => $this->integer()->notNull(),
            'release' => $this->date(),
            'created_at' => $this->timestamp()->defaultValue(date('Y-m-d H:i:s')),
            'updated_at' => $this->timestamp()->defaultValue(date('Y-m-d H:i:s')),
            
        ]);
        $this->createIndex(
            'idx-products-category_id',
            'products',
            'category_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-products-category_id',
            'products',
            'category_id',
            'categories',
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
            'fk-products-category_id',
            'products'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-products-category_id',
            'products',
        );
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
