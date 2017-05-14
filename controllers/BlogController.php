<?php
/**
 * Created by PhpStorm.
 * User: Levan Alpenidze
 * Date: 5/6/2017
 * Time: 6:12 PM
 */

namespace app\controllers;

use app\models\Article;
use app\models\Blog;
use Yii;
use yii\data\Pagination;

class BlogController extends AppController
{
    public function actionIndex() {
        $cats = Blog::find()->where(['cat' => '1'])->limit(6)->all();
        $this->setMeta("Travelers' Club | ბლოგი");
        return $this->render('index', compact('cats'));
    }

    public function actionView($id) {
        $id = Yii::$app->request->get('id');
//        $articles = Article::find()->where(['category_id' => $id])->all();
        $title = Blog::findOne($id);
        if (empty($title))
            throw new \yii\web\HttpException(404, 'მოთხოვნილი კატეგორია ჯერჯერობით არ არსებობს.');

        $query = Article::find()->where(['category_id' => $id]);
        $pages = new Pagination(['totalCount' => $query ->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $articles = $query->offset($pages->offset)->limit($pages->limit)->all();
        $this->setMeta('Travelers Club | ' . $title->name, $title->keywords, $title->description);
        return $this->render('view', compact('articles', 'title', 'pages'));
    }

}