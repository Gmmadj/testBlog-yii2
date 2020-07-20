<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%column}}`.
 */
class m200719_165121_create_column_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%column}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(),
            'header' => $this->string(),
            'content' => $this->text(),
            'block_id' => $this->integer(),
        ]);

        $this->createIndex(
            'idx-column-block_id',
            'column',
            'block_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-column-block_id',
            'column',
            'block_id',
            'block',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%column}}');
    }
}
