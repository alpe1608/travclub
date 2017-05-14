<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property integer $index_id
 * @property integer $service_id
 * @property string $name
 * @property string $reg
 * @property string $img
 * @property string $keywords
 * @property string $description
 * @property string $hide
 */
class Category extends \yii\db\ActiveRecord
{

    public $image;
//    public $gallery;

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
        return 'category';
    }

    public function getCategory() {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'index_id', 'service_id'], 'integer'],
            [['service_id', 'name'], 'required'],
            [['reg', 'hide'], 'string'],
            [['name', 'img', 'keywords', 'description'], 'string', 'max' => 255],
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
            'id' => 'კატეგორია №',
            'parent_id' => 'მშობელი კატეგორია',
            /*'index_id' => 'Index ID',
            'service_id' => 'Service ID',*/
            'name' => 'დასახელება',
            'reg' => 'Reg',
            'image' => 'ფოტო',
//            'gallery' => 'გალერეა',
            'keywords' => 'Keywords',
            'description' => 'Description',
            //'hide' => 'Hide',
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
