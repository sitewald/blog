<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_data".
 *
 * @property integer $id
 * @property string $author
 * @property string $text
 * @property string $date
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author', 'text', 'date'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['author'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'text' => 'Text',
            'date' => 'Date',
        ];
    }
}
