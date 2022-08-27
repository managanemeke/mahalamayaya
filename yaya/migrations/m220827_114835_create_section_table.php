<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%section}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%provider}}`
 */
class m220827_114835_create_section_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%section}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'provider_id' => $this->integer(),
        ]);

        // creates index for column `provider_id`
        $this->createIndex(
            '{{%idx-section-provider_id}}',
            '{{%section}}',
            'provider_id'
        );

        // add foreign key for table `{{%provider}}`
        $this->addForeignKey(
            '{{%fk-section-provider_id}}',
            '{{%section}}',
            'provider_id',
            '{{%provider}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%provider}}`
        $this->dropForeignKey(
            '{{%fk-section-provider_id}}',
            '{{%section}}'
        );

        // drops index for column `provider_id`
        $this->dropIndex(
            '{{%idx-section-provider_id}}',
            '{{%section}}'
        );

        $this->dropTable('{{%section}}');
    }
}
