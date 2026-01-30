<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $author
 * @property string $country
 * @property string|null $imageLink
 * @property string $language
 * @property string|null $link
 * @property int $pages
 * @property string $title
 * @property int $year
 * @property int|null $created_at
 */
class Book extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imageLink', 'link', 'created_at'], 'default', 'value' => null],
            [['author', 'country', 'language', 'pages', 'title', 'year'], 'required'],
            [['pages', 'year', 'created_at'], 'integer'],
            [['author', 'country', 'imageLink', 'language', 'link', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'country' => 'Country',
            'imageLink' => 'Image Link',
            'language' => 'Language',
            'link' => 'Link',
            'pages' => 'Pages',
            'title' => 'Title',
            'year' => 'Year',
            'created_at' => 'Created At',
        ];
    }

}
