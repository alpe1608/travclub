<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $my_index_id
 * @property string $name
 * @property double $price_old
 * @property double $price
 * @property string $annotation
 * @property string $content
 * @property integer $day
 * @property integer $night
 * @property string $about
 * @property string $itinerary
 * @property string $data_lat
 * @property string $data_long
 * @property string $data_address
 * @property string $reviews
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property string $relat
 * @property string $hit
 * @property string $new
 * @property string $sale
 * @property string $ship
 * @property string $car
 * @property string $horse
 * @property string $walk
 * @property string $bike
 * @property string $hide
 */
class Product extends \yii\db\ActiveRecord
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
        return 'product';
    }

    public function getCategory() {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'name', 'annotation'], 'required'],
            [['category_id', 'my_index_id', 'day', 'night'], 'integer'],
            [['price_old', 'price'], 'number'],
            [['content', 'about', 'itinerary', 'data_address', 'reviews', 'relat', 'hit', 'new', 'sale', 'ship', 'car', 'horse', 'walk', 'bike', 'hide'], 'string'],
            [['name', 'annotation', 'data_lat', 'data_long', 'keywords', 'description', 'img'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg'],
            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'პროდუქტის ID',
            'category_id' => 'კატეგორია',
//            'my_index_id' => 'My Index ID',
            'name' => 'პროდუქტის დასახელება',
            'price_old' => 'ძველი ფასი',
            'price' => 'ფასი',
            'annotation' => 'Annotation',
//            'content' => 'Content',
            'day' => 'დღე',
            'night' => 'ღამე',
            'about' => 'აღწერა',
            'itinerary' => 'გრაფიკი',
            /*'data_lat' => 'Data Lat',
            'data_long' => 'Data Long',
            'data_address' => 'Data Address',
            'reviews' => 'გამოხმაურება',*/
            'keywords' => 'Keywords',
            'description' => 'Description',
            'image' => 'ფოტო',
            'gallery' => 'გალერეა',
            'relat' => 'Relat',
            'hit' => 'Hit',
            'new' => 'New',
            'sale' => 'Sale',
            /*'ship' => 'Ship',
            'car' => 'Car',
            'horse' => 'Horse',
            'walk' => 'Walk',
            'bike' => 'Bike',
            'hide' => 'Hide',*/
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
