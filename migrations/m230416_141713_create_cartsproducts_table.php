<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cartsproducts}}`.
 */
class m230416_141713_create_cartsproducts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cartsproducts}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'cart_id' => $this->integer()->notNull(),
            'quantity' => $this->integer(),
        ]);
        $this->createIndex(
            'idx-cartsproducts-product_id',
            'cartsproducts',
            'product_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-cartsproducts-product_id',
            'cartsproducts',
            'product_id',
            'products',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-cartsproducts-cart_id',
            'cartsproducts',
            'cart_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-cartsproducts-cart_id',
            'cartsproducts',
            'cart_id',
            'carts',
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
            'fk-cartsproducts-product_id',
            'cartsproducts'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-cartsproducts-product_id',
            'cartsproducts'
        );

        $this->dropForeignKey(
            'fk-cartsproducts-cart_id',
            'cartsproducts'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-cartsproducts-cart_id',
            'cartsproducts'
        );
        $this->dropTable('{{%cartsproducts}}');
    }
}
