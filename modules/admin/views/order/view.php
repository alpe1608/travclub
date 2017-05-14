<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


Use app\assets\CatAppAsset;
use yii\helpers\Url;

CatAppAsset::register($this);
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
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

    <div class="order-view">

        <h1>შეკვეთა №<?= $model->id ?></h1>

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
            'created_at',
            'updated_at',
            'qty',
            'sum',
//            'status',
            [
                'attribute' => 'status',
                'value' => !$model->status ? '<span class="text-danger">აქტიურია</span>' : '<span class="text-success">დასრულებულია</span>',
                'format' => 'html',
            ],
            'name',
            'email:email',
            'phone',
            'address',
        ],
    ]) ?>

        <?php $items = $model->orderItems;?>

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>პროდუქტის დასახელება</th>
                    <th>რაოდენობა</th>
                    <th>ფასი</th>
                    <th>ჯამი</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($items as $item): ?>
                    <tr>
                        <td><a href="<?= Url::to(['/product/view', 'id' => $item->product_id])?>"> <?= $item['name']?></a></td>
                        <td><?= $item['qty_item']?></td>
                        <td><?= $item['price']?></td>
                        <td><?= $item['sum_item']?></td>
                    </tr>
                <?php endforeach?>
                </tbody>
            </table>
        </div>

    </div>






            </div>
        </div>
    </section>
</div>
