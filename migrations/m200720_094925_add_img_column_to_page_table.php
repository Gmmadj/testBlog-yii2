<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%page}}`.
 */
class m200720_094925_add_img_column_to_page_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%page}}', 'img', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%page}}', 'img');
    }
}
