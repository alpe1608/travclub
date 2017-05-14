<?php
use yii\helpers\Html;
use app\assets\CatAppAsset;
use yii\helpers\Url;
CatAppAsset::register($this);
use yii\widgets\Breadcrumbs;

?>
<?= Html::encode($this->title) ?>
<div class="site wrapper-content">
    <div class="top_site_main" style="background-image:url(/travclub/web/images/banner/top-heading.jpg);">
        <div class="banner-wrapper container article_heading">
            <div class="breadcrumbs-wrapper">
                <ul class="phys-breadcrumb">
                    <li><a href="<?= Url::home();?>" class="home"><?= Yii::t('common', 'Home') ?></a></li>
                    <li></li>
                </ul>
            </div>
            <h1 class="heading_primary"><?= Yii::t('common', 'destinations') ?></h1></div>
    </div>
    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="site-main col-sm-12 full-width">
                    <div class="sc-gallery wrapper_gallery">
                        <div class="row content_gallery">

                            <?php if( !empty($regs) ): ?>
                            <?php foreach ($regs as $reg):?>
                            <?php
                            $mainImg = $reg->getImage();
                            $gallery = $reg->getImages();
                            ?>
                            <div class="col-sm-4 gallery_item-wrap">
                                <a href="<?= Url::to(['category/view', 'id' => $reg->id])?>">

                                    <?= Html::img($mainImg->getUrl('430x305'), ['alt' => $reg->name])?>
                                </a>
                                <div class="item__title_1"><?= $reg->name?></div>
                            </div>
                                <?php endforeach;?>
                        <?php endif;?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>