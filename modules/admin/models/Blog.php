<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property string $name
 * @property string $img
 * @property string $keywords
 * @property string $description
 * @property string $cat
 */
class Blog extends \yii\db\ActiveRecord
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
        return 'blog';
    }

    public function getArticle() {
        return $this->hasMany(Article::className(), ['id' => 'parent_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['cat'], 'string'],
            [['name', 'img', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'დასახელება',
            'image' => 'ფოტო',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'cat' => 'Cat',
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

    /*public function uploadGallery() {
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
    }*/
}
