<?php

use yii\helpers\Html;


Use app\assets\CatAppAsset;

CatAppAsset::register($this);

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = 'Update Order: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="site wrapper-content">
    <div class="top_site_main" style="background-image:url(/travclub/web/images/banner/top-heading.jpg);">
        <div class="banner-wrapper container article_heading">
            <div class="breadcrumbs-wrapper">
                <ul class="phys-breadcrumb">
                    <li><a href="index.html" class="home">HOME</a></li>
                    <li>Tours List</li>
                </ul>
            </div>
            <h1 class="heading_primary">განახლება</h1>
        </div>
    </div>

    <section class="content-area">
        <div class="container">
            <div class="row">

    <div class="order-update">

        <h1>№<?= $model->id ?> შეკვეთის რედაქტირება</h1>

        <?= $this->render('_form', [
        'model' => $model,
        ]) ?>

    </div>

            </div>
        </div>
    </section>

</div>
