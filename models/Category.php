<?php
/**
 * Created by PhpStorm.
 * User: Levan Alpenidze
 * Date: 4/12/2017
 * Time: 2:23 AM
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{

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
        return 'category';
    }

    public function getProducts () {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

    public function getArticle () {
        return $this->hasMany(Article::className(), ['tag' => 'id']);
    }

}