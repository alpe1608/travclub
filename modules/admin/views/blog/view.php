<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

Use app\assets\CatAppAsset;

CatAppAsset::register($this);
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Blog */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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
            <h1 class="heading_primary">კატეგორიები</h1>
        </div>
    </div>

    <section class="content-area">
        <div class="container">
            <div class="row">

                <?php if ( Yii::$app->session->hasFlash('success') ): ?>
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span> </button>
                        <?php echo Yii::$app->session->getFlash('success');?>
                    </div>
                <?php endif;?>

                <?php if ( Yii::$app->session->hasFlash('error') ): ?>
                    <div class="alert alert-danger alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span> </button>
                        <?php echo Yii::$app->session->getFlash('error');?>
                    </div>
                <?php endif;?>

<div class="blog-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'img',
            'keywords',
            'description',
//            'cat',
            [
                'attribute' => 'cat',
                'value' => function($data) {
                    return !$data->cat ? '<span class="text-danger">არა</span>' : '<span class="text-success">დიახ</span>';
                },
                'format' => 'html',
            ],
        ],
    ]) ?>

</div>

            </div>
        </div>
    </section>

</div>
