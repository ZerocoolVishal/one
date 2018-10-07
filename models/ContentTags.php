<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contentTags".
 *
 * @property int $id
 * @property int $content
 * @property int $tag
 *
 * @property Content $content0
 * @property Tags $tag0
 */
class ContentTags extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contentTags';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'tag'], 'required'],
            [['content', 'tag'], 'integer'],
            [['content'], 'exist', 'skipOnError' => true, 'targetClass' => Content::className(), 'targetAttribute' => ['content' => 'id']],
            [['tag'], 'exist', 'skipOnError' => true, 'targetClass' => Tags::className(), 'targetAttribute' => ['tag' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'tag' => 'Tag',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContent0()
    {
        return $this->hasOne(Content::className(), ['id' => 'content']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTag0()
    {
        return $this->hasOne(Tags::className(), ['id' => 'tag']);
    }
}
