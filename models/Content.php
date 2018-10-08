<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $date
 * @property int $category
 * @property string $language
 * @property string $launchYear
 *
 * @property Category $category0
 * @property ContentTags[] $contentTags
 * @property Links[] $links
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'image', 'date', 'category', 'language', 'launchYear'], 'required'],
            [['date', 'launchYear'], 'safe'],
            [['category'], 'integer'],
            [['title', 'language'], 'string', 'max' => 100],
            [['description', 'image'], 'string', 'max' => 1000],
            [['category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'date' => 'Date',
            'category' => 'Category',
            'language' => 'Language',
            'launchYear' => 'Launch Year',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory0()
    {
        return $this->hasOne(Category::className(), ['id' => 'category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContentTags()
    {
        return $this->hasMany(ContentTags::className(), ['content' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLinks()
    {
        return $this->hasMany(Links::className(), ['content' => 'id']);
    }
}
