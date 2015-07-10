<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_post".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $category
 * @property string $picture
 * @property integer $day
 * @property string $month
 * @property integer $views
 * @property string $author
 */
class BlogPost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'category', 'picture', 'day', 'month', 'author'], 'required'],
            [['title', 'content', 'category', 'picture', 'month', 'author'], 'string'],
            [['day', 'views'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'category' => 'Category',
            'picture' => 'Picture',
            'day' => 'Day',
            'month' => 'Month',
            'views' => 'Views',
            'author' => 'Author',
        ];
    }
}
