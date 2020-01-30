<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "authors".
 *
 * @property int $id
 * @property string $name
 * @property int $birth
 * @property int|null $rating
 *
 * @property Books[] $books
 *
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'authors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'birth'], 'required'],
            [['birth', 'rating'], 'integer'],
            [['name'], 'string', 'max' => 250],
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
            'birth' => 'Birth',
            'rating' => 'Rating',
        ];
    }

    public function getBooks()
    {
        return $this->hasMany(Books::class, ['author_id' => 'id']);
    }

    public function getUrl()
    {
        return 'books?id=' . $this->id;
    }

}
