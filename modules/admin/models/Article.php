<?php

namespace app\modules\admin\models;

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
class Article extends \yii\db\ActiveRecord
{

    public $image;
    public $gallery;

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    public function getBlog() {
        return $this->hasOne(Blog::className(), ['id' => 'category_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'category_id', 'blog_title', 'tag'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['category_id'], 'integer'],
            [['anotation', 'content', 'tag'], 'string'],
            [['blog_title', 'img', 'author', 'email', 'phone', 'Pseudonym', 'keywords', 'description'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg'],
//            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'შექმნის თარიღი',
            'updated_at' => 'განახლების თარიღი',
            'category_id' => 'კატეგორია',
            'blog_title' => 'სათაური',
            'image' => 'ფოტო',
            'anotation' => 'ანოტაცია',
            'content' => 'შინაარსი',
            'author' => 'ავტორი',
            'email' => 'Email',
            'phone' => 'Phone',
            'Pseudonym' => 'Pseudonym',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'tag' => 'Tag',
        ];
    }

    public function upload() {
        if ($this->validate()) {
            $path = 'upload/store/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path, true);
            @unlink($path);
            return true;
        }else{
            return false;
        }
    }

    public function uploadGallery() {
        if ($this->validate()) {
            foreach ($this->gallery as $file) {
                $path = 'upload/store/' . $file->baseName . '.' . $file->extension;
                $file->saveAs($path);
                $this->attachImage($path);
                @unlink($path);
            }
            return true;
        }else{
            return false;
        }
    }
}
