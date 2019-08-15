<?php

use yii\db\Migration;

/**
 * Class m190815_142004_create_table_genre
 */
class m190815_142004_create_table_genre extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('genres', [
            'id' => $this->primaryKey(),
            'name' => $this->string(75)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('genres');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190815_142004_create_table_genre cannot be reverted.\n";

        return false;
    }
    */
}
