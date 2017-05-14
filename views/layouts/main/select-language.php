<?php

use yii\bootstrap\Html;

if(\Yii::$app->language == 'ru'):
    echo Html::a('EN', array_merge(
        \Yii::$app->request->get(),
        [\Yii::$app->controller->route, 'language' => 'en']
    ));
elseif (\Yii::$app->language == 'en'):
    echo Html::a('GEO', array_merge(
        \Yii::$app->request->get(),
        [\Yii::$app->controller->route, 'language' => 'ka']
    ));
else:
    echo Html::a('RU', array_merge(
        \Yii::$app->request->get(),
        [\Yii::$app->controller->route, 'language' => 'ru']
    ));
endif;