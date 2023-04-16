<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%productsaccessories}}`.
 */
class m230416_133505_create_productsaccessories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%productsaccessories}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'accessory_id' => $this->integer()->notNull(),
        ]);
        $this->createIndex(
            'idx-productsaccessories-product_id',
            'productsaccessories',
            'product_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-productsaccessories-product_id',
            'productsaccessories',
            'product_id',
            'products',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-productsaccessories-accessory_id',
            'productsaccessories',
            'accessory_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-productsaccessories-accessory_id',
            'productsaccessories',
            'accessory_id',
            'accessories',
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
            'fk-productsaccessories-accessory_id',
            'productsaccessories'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-productsaccessories-accesory_id',
            'productsaccessories'
        );
        $this->dropForeignKey(
            'fk-productsaccessories-product_id',
            'productsaccessories'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-productsaccessories-product_id',
            'productsaccessories'
        );
        $this->dropTable('{{%productsaccessories}}');
    }
}
