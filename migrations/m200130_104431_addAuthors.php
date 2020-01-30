<?php

use yii\db\Migration;

/**
 * Class m200130_104431_addAuthors
 */
class m200130_104431_addAuthors extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('authors', [
            'id' => 'pk',
            'name' => $this->string(250)->notNull(),
            'birth' => $this->integer(4)->notNull(),
            'rating' => $this->integer(1)->defaultValue(0)->null(),
        ], 'ENGINE=MyISAM DEFAULT CHARSET=utf8');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('authors');
    }

}
