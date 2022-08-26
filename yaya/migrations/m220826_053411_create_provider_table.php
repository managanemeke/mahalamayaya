<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%provider}}`.
 */
class m220826_053411_create_provider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%provider}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'is_active' => $this->boolean()->notNull()->defaultValue(false),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%provider}}');
    }
}
