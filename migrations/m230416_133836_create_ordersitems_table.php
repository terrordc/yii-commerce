<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ordersitems}}`.
 */
class m230416_133836_create_ordersitems_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ordersitems}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'order_id' => $this->integer()->notNull(),
            'quantity' => $this->integer()->notNull(),
        ]);
        $this->createIndex(
            'idx-ordersitems-product_id',
            'ordersitems',
            'product_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-ordersitems-product_id',
            'ordersitems',
            'product_id',
            'products',
            'id',
            'CASCADE'
        );


        $this->createIndex(
            'idx-ordersitems-order_id',
            'ordersitems',
            'order_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-ordersitems-order_id',
            'ordersitems',
            'order_id',
            'orders',
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
            'fk-ordersitems-product_id',
            'ordersitems'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-ordersitems-product_id',
            'ordersitems'
        );
        $this->dropForeignKey(
            'fk-ordersitems-order_id',
            'ordersitems'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-ordersitems-order_id',
            'ordersitems'
        );
        $this->dropTable('{{%ordersitems}}');
    }
}
