<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "musics".
 *
 * @property int $id
 * @property string $name
 * @property string $time
 * @property int $genre_id
 * @property int $artiste_id
 *
 * @property Artiste $artiste
 * @property Genre $genre
 */
class Music extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'musics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'genre_id', 'artiste_id'], 'required'],
            [['genre_id', 'artiste_id'], 'integer'],
            [['name'], 'string', 'max' => 75],
            [['time'], 'string', 'max' => 5],
            [['artiste_id'], 'exist', 'skipOnError' => true, 'targetClass' => Artiste::className(), 'targetAttribute' => ['artiste_id' => 'id']],
            [['genre_id'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['genre_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'time' => 'Time',
            'genre_id' => 'Genre ID',
            'artiste_id' => 'Artiste ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtiste()
    {
        return $this->hasOne(Artiste::className(), ['id' => 'artiste_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::className(), ['id' => 'genre_id']);
    }
}
