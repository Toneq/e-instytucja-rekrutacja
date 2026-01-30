<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book}}`.
 */
class m260130_132829_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'author' => $this->string()->notNull(),
            'country' => $this->string()->notNull(),
            'imageLink' => $this->string()->null(),
            'language' => $this->string()->notNull(),
            'link' => $this->string()->null(),
            'pages' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'year' => $this->integer()->notNull(),
            'created_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book}}');
    }
}
