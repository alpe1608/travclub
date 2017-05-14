<?php
/**
 * Created by PhpStorm.
 * User: Levan Alpenidze
 * Date: 4/14/2017
 * Time: 8:58 PM
 */

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
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

    public static function tableName()
    {
        return 'product';
    }

    public function getCategory () {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function getPrev() {
        return self::find()->where(['<', 'id', $this->id])->orderBy('id DESC')->one();
    }

    public function getNext() {
        return self::find()->where(['>', 'id', $this->id])->orderBy('id ASC')->one();
    }

}