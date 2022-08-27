<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%meal}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%section}}`
 */
class m220827_114836_create_meal_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%meal}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'composition' => $this->string()->notNull(),
            'price' => $this->float()->notNull(),
            'section_id' => $this->integer(),
        ]);

        // creates index for column `section_id`
        $this->createIndex(
            '{{%idx-meal-section_id}}',
            '{{%meal}}',
            'section_id'
        );

        // add foreign key for table `{{%section}}`
        $this->addForeignKey(
            '{{%fk-meal-section_id}}',
            '{{%meal}}',
            'section_id',
            '{{%section}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%section}}`
        $this->dropForeignKey(
            '{{%fk-meal-section_id}}',
            '{{%meal}}'
        );

        // drops index for column `section_id`
        $this->dropIndex(
            '{{%idx-meal-section_id}}',
            '{{%meal}}'
        );

        $this->dropTable('{{%meal}}');
    }
}
