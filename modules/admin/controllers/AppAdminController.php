<?php
/**
 * Created by PhpStorm.
 * User: Levan Alpenidze
 * Date: 4/28/2017
 * Time: 1:59 PM
 */

namespace app\modules\admin\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;


class AppAdminController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
//                'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        /*'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],*/
                    ],
                    [
                        'allow' => true,
//                        'actions' => ['logout'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

}