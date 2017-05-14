<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

Use app\assets\CatAppAsset;
use yii\helpers\Url;

CatAppAsset::register($this);

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
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
            <h1 class="heading_primary">შეკვეთა</h1>
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

<div class="product-view">

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

    <?php $img = $model->getImage(); ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
//            'category_id',
            [
                'attribute' => 'category_id',
                'value' => function($data) {
                    return $data->category->name;
                },
            ],
//            'my_index_id',
            'name',
            'price_old',
            'price',
            'annotation:html',
//            'content:html',
            'day',
            'night',
            'about:html',
            'itinerary:html',
            /*'data_lat',
            'data_long',
            'data_address:html',
            'reviews:html',*/
            'keywords',
            'description',
            [
                'attribute' => 'image',
                'value' => "<img src='{$img->getUrl()}'>",
                'format' => 'html',
            ],
            'relat',
            'hit',
            'new',
            'sale',
            /*'ship',
            'car',
            'horse',
            'walk',
            'bike',
            'hide',*/
        ],
    ]) ?>

</div>

            </div>
        </div>
    </section>
</div>
