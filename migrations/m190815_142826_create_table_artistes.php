<?php

use yii\db\Migration;

/**
 * Class m190815_142826_create_table_artistes
 */
class m190815_142826_create_table_artistes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('artistes', [
            'id' => $this->primaryKey(),
            'name' => $this->string(75)->notNull()
        ]);

        $this->insert('artistes', 
            ['name' => 'Bob Dylan']
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('artistes');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190815_142826_create_table_artistes cannot be reverted.\n";

        return false;
    }
    */
}
