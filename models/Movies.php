<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movies".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $author
 * @property string $director
 * @property int $year
 */
class Movies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'image', 'author', 'director', 'year'], 'required'],
            [['description', 'image'], 'string'],
            [['year'], 'integer'],
            [['name'], 'string', 'max' => 12],
            [['author', 'director'], 'string', 'max' => 30],
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
            'description' => 'Description',
            'image' => 'Image',
            'author' => 'Author',
            'director' => 'Director',
            'year' => 'Year',
        ];
    }
}
