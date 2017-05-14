<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
Use app\assets\CatAppAsset;

CatAppAsset::register($this);
?>
<?= Html::encode($this->title) ?>
<div class="site wrapper-content">
    <div class="top_site_main" style="background-image:url(/travclub/web/images/banner/top-heading.jpg);">
        <div class="banner-wrapper container article_heading">
            <div class="breadcrumbs-wrapper">
                <ul class="phys-breadcrumb">
                    <li><a href="index.html" class="home">Home</a></li>
                    <li><a href="blog.html">Business</a></li>
                    <li>Love advice from experts</li>
                </ul>
            </div>
            <h2 class="heading_primary">Business</h2>
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

        <?php if (!empty($session['cart'])): ?>
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>ფოტო</th>
                        <th>პროდუქტის დასახელება</th>
                        <th>რაოდენობა</th>
                        <th>ფასი</th>
                        <th>ჯამი</th>
                        <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($session['cart'] as $id => $item): ?>
                        <tr>
                            <td style="text-align: center;"><?= \yii\helpers\Html::img($item['img'], ['alt' => $item['name'], 'height' => 50, 'width' => 70]) ?></td>
                            <td><a href="<?= Url::to(['product/view', 'id' => $id])?>"> <?= $item['name']?></a></td>
                            <td><?= $item['qty']?></td>
                            <td><?= $item['price']?></td>
                            <td><?= $item['qty'] * $item['price']?></td>
                            <td><span data-id="<?= $id?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                        </tr>
                    <?php endforeach?>
                    <tr>
                        <td colspan="5">სულ: </td>
                        <td><?= $session['cart.qty']?></td>
                    </tr>
                    <tr>
                        <td colspan="5">სულ თანხა: </td>
                        <td><?= $session['cart.sum']?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <hr>
            <?php $form = ActiveForm::begin()?>
            <?= $form->field($order, 'name')?>
            <?= $form->field($order, 'email')?>
            <?= $form->field($order, 'phone')?>
            <?= $form->field($order, 'address')?>
            <?= Html::submitButton('დაჯავშნა', ['class' => 'btn btn-success'])?>
            <?php ActiveForm::end()?>
        <?php else: ?>
            <h3>კალათა ცარიელია</h3>
        <?php endif;?>
            </div>
        </div>

    </section>
</div>

