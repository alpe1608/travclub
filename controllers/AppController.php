<?php
/**
 * Created by PhpStorm.
 * User: Levan Alpenidze
 * Date: 4/10/2017
 * Time: 10:26 PM
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{


    protected function setMeta($title = null, $keywords = null, $description = null) {
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
    }


}