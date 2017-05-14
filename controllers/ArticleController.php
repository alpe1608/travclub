<?php
/**
 * Created by PhpStorm.
 * User: Levan Alpenidze
 * Date: 5/6/2017
 * Time: 6:13 PM
 */

namespace app\controllers;

use app\models\Article;
use app\models\Blog;
use Yii;

class ArticleController extends AppController
{

    public function actionView($id) {

        $id = Yii::$app->request->get('id');
        $tags = Article::find()->where(['tag' => '1'])->all();
        $article = Article::findOne($id);
        if (empty($article))
            throw new \yii\web\HttpException(404, 'მოთხოვნილი პროდუქტი ჯერჯერობით არ არსებობს.');

        $this->setMeta('Travelers club | ' . $article->blog_title, $article->keywords, $article->description);
        return $this->render('view', compact('article'));

    }

}