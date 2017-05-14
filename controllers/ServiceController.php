<?php
/**
 * Created by PhpStorm.
 * User: Levan Alpenidze
 * Date: 4/18/2017
 * Time: 12:39 AM
 */

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use app\models\Service;
use Yii;

class ServiceController extends AppController
{

    public function actionMain() {
        $this->setMeta("Travelers' Club | Main");
       /* $request = Yii::$app->request->get('name');
        $compcatname = Service::find()->where(['alias' => $request])->one();*/
        return $this->render('index');

    }

}