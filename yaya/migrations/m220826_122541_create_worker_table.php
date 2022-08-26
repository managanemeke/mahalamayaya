<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%worker}}`.
 */
class m220826_122541_create_worker_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%worker}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%worker}}');
    }
}
