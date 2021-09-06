<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%movie}}`.
 */
class m210904_213613_create_movie_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%movies}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(12)->notNull(),
            'description' => $this->text()->notNull(),
            'image' => $this->text()->notNull(),
            'author' => $this->string(30)->notNull(),
            'director' => $this->string(30)->notNull(),
            'year' => $this->integer(4)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%movies}}');
    }
}
