<?php

namespace app\models;

use Yii;
use yii\data\Pagination;
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
 * @property integer $authorID
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

    public function brojPostova()
    {
        $query = BlogPost::find()->count();
        return $query;
    }

    public function bpUpit()
    {
        $query = BlogPost::find();
        return $query;
    }

    public function bpBrojStranica()
    {
        $countQuery = clone $this->bpUpit();
        $pages = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize' => 10,
        ]);
        return $pages;
    }


    public function dohvatiPostove()
    {
        $models = $this->bpUpit()->offset($this->bpBrojStranica()->offset)->limit($this->bpBrojStranica()->limit)->all();
        return $models;
    }

    public function dodajPost()
    {
        $mBlog = new BlogPost();
        $post = Yii::$app->request->post();

        $html = $post['content'];
        preg_match_all('~<img.*?src=["\']+(.*?)["\']+~', $html, $urls);
        $urls = $urls[1];

        // $mBlog = new BlogPost();
        $mBlog->author = $post['author'];
        $mBlog->title = $post['title'];
        $mBlog->content = $post['content'];
        $mBlog->category = $post['category'];
        if (empty($urls[0]))
        {
            $mBlog->picture = 'asdf.jpg';
        } else {
            $mBlog->picture = $urls[0];
        }
        
        if ($mBlog->save(false))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
