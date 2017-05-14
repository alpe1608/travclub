<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $category_id
 * @property string $blog_title
 * @property string $img
 * @property string $anotation
 * @property string $content
 * @property string $author
 * @property string $email
 * @property string $phone
 * @property string $Pseudonym
 * @property string $keywords
 * @property string $description
 * @property string $tag
 */
class Article extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    public function getBlog () {
        return $this->hasOne(Blog::className(), ['id' => 'category_id']);
    }

    public function getCategory () {
        return $this->hasOne(Category::className(), ['id' => 'tag']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'category_id', 'blog_title', 'author', 'email', 'phone', 'Pseudonym', 'tag'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['category_id'], 'integer'],
            [['anotation', 'content', 'tag'], 'string'],
            [['blog_title', 'img', 'author', 'email', 'phone', 'Pseudonym', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'category_id' => 'Category ID',
            'blog_title' => 'Blog Title',
            'img' => 'Img',
            'anotation' => 'Anotation',
            'content' => 'Content',
            'author' => 'Author',
            'email' => 'Email',
            'phone' => 'Phone',
            'Pseudonym' => 'Pseudonym',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'tag' => 'Tag',
        ];
    }
}
