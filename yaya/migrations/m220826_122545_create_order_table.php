<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%worker}}`
 * - `{{%meal}}`
 */
class m220826_122545_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'date' => $this->datetime()->defaultValue(date('Y-m-d H:i:s')),
            'worker_id' => $this->integer(),
            'meal_id' => $this->integer(),
        ]);

        // creates index for column `worker_id`
        $this->createIndex(
            '{{%idx-order-worker_id}}',
            '{{%order}}',
            'worker_id'
        );

        // add foreign key for table `{{%worker}}`
        $this->addForeignKey(
            '{{%fk-order-worker_id}}',
            '{{%order}}',
            'worker_id',
            '{{%worker}}',
            'id',
            'CASCADE'
        );

        // creates index for column `meal_id`
        $this->createIndex(
            '{{%idx-order-meal_id}}',
            '{{%order}}',
            'meal_id'
        );

        // add foreign key for table `{{%meal}}`
        $this->addForeignKey(
            '{{%fk-order-meal_id}}',
            '{{%order}}',
            'meal_id',
            '{{%meal}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%worker}}`
        $this->dropForeignKey(
            '{{%fk-order-worker_id}}',
            '{{%order}}'
        );

        // drops index for column `worker_id`
        $this->dropIndex(
            '{{%idx-order-worker_id}}',
            '{{%order}}'
        );

        // drops foreign key for table `{{%meal}}`
        $this->dropForeignKey(
            '{{%fk-order-meal_id}}',
            '{{%order}}'
        );

        // drops index for column `meal_id`
        $this->dropIndex(
            '{{%idx-order-meal_id}}',
            '{{%order}}'
        );

        $this->dropTable('{{%order}}');
    }
}
