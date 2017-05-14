<?php

namespace app\models;

use yii\db\ActiveRecord;
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
class Blog extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    public function getArticle () {
        return $this->hasMany(Article::className(), ['category_id' => 'id']);
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
            'name' => 'Name',
            'img' => 'Img',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'cat' => 'Cat',
        ];
    }
}
