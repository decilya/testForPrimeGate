<?php

use yii\db\Migration;

/**
 * Class m200130_104448_addBookds
 */
class m200130_104448_addBooks extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('books', [
            'id' => 'pk',
            'author_id' => $this->string(250)->notNull(),
            'created_year' => $this->integer(4)->notNull(),
            'name' => $this->string(250)->notNull(),
            'rating' => $this->integer(1)->defaultValue(0)->null(),
        ], 'ENGINE=MyISAM DEFAULT CHARSET=utf8');

        $this->createIndex('idx-author_id', 'books', 'author_id');
        $this->addForeignKey('fk-author_id', 'books', 'author_id', 'authors', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-author_id',
            'books'
        );

        $this->dropIndex(
            'idx-author_id',
            'books'
        );

        $this->dropTable('books');
    }

}
