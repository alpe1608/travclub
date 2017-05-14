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



class TipsController extends AppController
{
    public function actionIndex() {
        $this->setMeta("Travelers' Club | Checkout");
        return $this->render('index');

    }

    public function actionView() {
        $this->setMeta("Travelers' Club | Checkout");
        return $this->render('view');

    }




}