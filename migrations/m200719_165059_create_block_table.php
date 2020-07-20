<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%block}}`.
 */
class m200719_165059_create_block_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%block}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'page_id' => $this->integer(),
        ]);

        $this->createIndex(
            'idx-block-page_id',
            'block',
            'page_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-block-page_id',
            'block',
            'page_id',
            'page',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%block}}');
    }
}
