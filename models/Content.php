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
 * @property int $language_id
 * @property string $launchYear
 * @property string $timestamp
 *
 * @property Category $category0
 * @property Languages $language
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
            [['title', 'description', 'image', 'date', 'category', 'language_id', 'launchYear'], 'required'],
            [['date', 'launchYear', 'timestamp'], 'safe'],
            [['category', 'language_id'], 'integer'],
            [['title'], 'string', 'max' => 100],
            [['description', 'image'], 'string', 'max' => 1000],
            [['category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category' => 'id']],
            [['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Languages::className(), 'targetAttribute' => ['language_id' => 'id']],
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
            'language_id' => 'Language ID',
            'launchYear' => 'Launch Year',
            'timestamp' => 'Timestamp',
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
    public function getLanguage()
    {
        return $this->hasOne(Languages::className(), ['id' => 'language_id']);
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

    public function getTags()
    {
        return $this->hasMany(Tag::className(), ['id' => 'tag'])
                    ->viaTable('contentTags', ['content' => 'id']);
    }
}
