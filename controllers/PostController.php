<?php
/**
 * Created by PhpStorm.
 * User: Levan Alpenidze
 * Date: 4/14/2017
 * Time: 11:58 AM
 */

namespace app\controllers;
use Yii;
use app\controllers\AppController;



class PostController extends AppController
{
    public function actionContact() {
        $this->setMeta("Travelers' Club | Contacts");
        return $this->render('view');

    }




}