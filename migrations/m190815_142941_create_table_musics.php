<?php

use yii\db\Migration;

/**
 * Class m190815_142941_create_table_musics
 */
class m190815_142941_create_table_musics extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('musics', [
            'id' => $this->primaryKey(),
            'name' => $this->string(75)->notNull(),
            'time' => $this->string(5),
            'genre_id' => $this->integer()->notNull(),
            'artiste_id' => $this->integer()->notNull()
        ]);

        $this->addForeignKey('fk_music_genre_id', 'musics', 'genre_id', 'genres', 'id');
        $this->addForeignKey('fk_music_artiste_id', 'musics', 'artiste_id', 'artistes', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_music_genre_id','musics');
        $this->dropForeignKey('fk_music_artiste_id','musics');
        $this->dropTable('musics');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190815_142941_create_table_musics cannot be reverted.\n";

        return false;
    }
    */
}
