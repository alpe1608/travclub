<?php
/**
 * Created by PhpStorm.
 * User: Levan Alpenidze
 * Date: 4/14/2017
 * Time: 9:01 PM
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;

class ProductController extends AppController
{

    public function actionView($id) {
//        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        if (empty($product))
            throw new \yii\web\HttpException(404, 'მოთხოვნილი პროდუქტი ჯერჯერობით არ არსებობს.');
        $hits = Product::find()->where(['hit' => '1'])->all();
        $relats = Product::find()->where(['relat' => '1'])->limit(3)->all();
        $this->setMeta('Travelers club | ' . $product->name, $product->keywords, $product->description);
        return $this->render('view', compact('product', 'hits', 'relats'));
    }

}