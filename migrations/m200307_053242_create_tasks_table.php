<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tasks}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%users}}`
 */
class m200307_053242_create_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tasks}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(1024),
            'description' => $this->text(),
            'status' => $this->text(),
            'time_added' => $this->integer(11),
            'time_finished' => $this->integer(11),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops index for column `created_by`
        $this->dropTable('{{%tasks}}');
    }
}
