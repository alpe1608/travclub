<?php
/**
 * Created by PhpStorm.
 * User: Levan Alpenidze
 * Date: 4/12/2017
 * Time: 2:03 AM
 */

namespace app\controllers;

use app\models\Article;
use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;


class CategoryController extends AppController
{

    public function actionIndex() {
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        $regs = Category::find()->where(['reg' => '1'])->limit(10)->all();
        $news = Product::find()->where(['new' => '1'])->limit(10)->all();
        $tags = Article::find()->where(['tag' => '1'])->limit(2)->all();
        $this->setMeta("Travelers' Club");
        return $this->render('index', compact('hits', 'regs', 'news', 'tags'));
    }

    public function actionList() {
        $regs = Category::find()->where(['reg' => '1'])->limit(10)->all();
        $this->setMeta("Travelers' Club | კატეგორიები");
        return $this->render('category-list', compact( 'regs'));
    }

    public function actionView($id) {
//        $id = Yii::$app->request->get('id');
        $category = Category::findOne($id);
        $hits = Product::find()->where(['hit' => '1'])->limit(3)->all();
        if (empty($category))
            throw new \yii\web\HttpException(404, 'მოთხოვნილი კატეგორია ჯერჯერობით არ არსებობს.');


//        $products = Product::find()->where(['category_id' => $id])->all();
        $query = Product::find()->where(['category_id' => $id]);
        $pages = new Pagination(['totalCount' => $query ->count(), 'pageSize' => 6, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta('Travelers club | ' . $category->name, $category->keywords, $category->description);
        return $this->render('view', compact('products','pages', 'category', 'hits'));
    }

    public function actionSearch() {
        $q = trim(Yii::$app->request->get('q'));
        $this->setMeta('Travelers club | ძიება: ' . $q);
        if (!$q)
            return $this->render ('search');
        $query = Product::find()->where(['like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query ->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render ('search', compact('products', 'pages', 'q'));
    }

    /*public function actionDestination()
    {
        $this->setMeta("Travelers' Club | Destinations");
        return $this->render('destinations');

    }

    public function actionTour()
    {
        $this->setMeta("Travelers' Club | Tours");
        return $this->render('tours');

    }

    public function actionTour2Columns()
    {
        $this->setMeta("Travelers' Club | Tours");
        return $this->render('view_2_columns');

    }

    public function actionTour3Columns()
    {
        $this->setMeta("Travelers' Club | Tours");
        return $this->render('view_3_columns');

    }

    public function actionTour4Columns()
    {
        $this->setMeta("Travelers' Club | Tours");
        return $this->render('view_4_columns');

    }

    public function actionTourList()
    {
        $this->setMeta("Travelers' Club | Tours");
        return $this->render('view_tour_list');

    }*/



}