<?php

namespace app\models;

use Yii;
use app\models\Authors;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $author_id
 * @property int $created_year
 * @property string $name
 * @property int|null $rating
 * @property Authors $author
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author_id', 'created_year', 'name'], 'required'],
            [['created_year', 'rating'], 'integer'],
            [['author_id', 'name'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Author ID',
            'created_year' => 'Created Year',
            'name' => 'Name',
            'rating' => 'Rating',
        ];
    }

    public function getAuthor()
    {
        return Authors::find()->where(['id' => $this->author_id])->one();
    }
}
