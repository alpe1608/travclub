<?php
/**
 * Created by PhpStorm.
 * User: Levan Alpenidze
 * Date: 4/18/2017
 * Time: 12:31 AM
 */

namespace app\models;
use yii\db\ActiveRecord;

class Service extends ActiveRecord
{

    public static function tableName()
    {
        return 'service';
    }

    public function getCategory() {
        return $this->hasMany(Category::className(), ['service-id' => 'id']);
    }

}