<?php
use yii\helpers\Html;
use yii\db\ActiveRecord;
use yii\widgets\LinkPager;
use yii\helpers\Url;
Use app\assets\CatAppAsset;

CatAppAsset::register($this);
?>
<?= Html::encode($this->title) ?>
<div class="site wrapper-content">
    <div class="top_site_main" style="background-image:url(/travclub/web/images/banner/top-heading.jpg);">
        <div class="banner-wrapper container article_heading">
            <div class="breadcrumbs-wrapper">
                <ul class="phys-breadcrumb">
                    <li><a href="<?= Url::home();?>" class="home">მთავარი</a></li>
                    <li><a href="<?= Url::to('/travclub/web/blog')?>" class="home">ბლოგი</a></li>
                </ul>
            </div>
            <h1 class="heading_primary"><?= $title->name?></h1></div>
    </div>

    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="site-main col-sm-9 align-left">
                    <div class="wrapper-blog-content">




                                <div class="shortcode_title title-center title-decoration-bottom-center">
                                    <h3 class="title_primary"><?= $title->name?></h3><span class="line_after_title"></span>
                                </div>

                        <?php if (!empty($articles)):?>
                            <?php foreach ($articles as $article):?>

                                <article class="type-post">
                                    <div class="img_post"><a href="<?= Url::to(['article/view', 'id' => $article->id]) ?>">
                                            <?= Html::img("@web/images/blog/$article->img", ['alt' => $article->blog_title, 'width' => '370', 'height' => '260', 'class' => 'wp-post-image'])?>
                                        </a>
                                    </div>
                                    <div class="entry-content content-thumbnail">
                                        <header class="entry-header">
                                            <h2 class="entry-title">
                                                <a href="<?= Url::to(['article/view', 'id' => $article->id]) ?>" rel="bookmark"><?= $article->blog_title?></a>
                                            </h2>
                                            <div class="entry-meta">
											<span class="posted-on">Posted on <a href="/travclub/web/blog/article-single" rel="bookmark">
												<time class="entry-date published" datetime="2016-09-06T04:52:25+00:00"><?= $article->created_at?></time>
											</a></span>
                                            </div>
                                        </header>
                                        <div class="entry-desc">
                                            <?= $article->anotation?>
                                        </div>
                                    </div>
                                </article>

                            <?php endforeach;?>
                            <div class="clearfix"></div>
                            <div class="navigation paging-navigation" role="navigation">
                                <?php
                                echo \yii\widgets\LinkPager::widget([
                                    'pagination' => $pages,
                                ]);
                                ?>
                            </div>
                        <?php else : ?>
                            <div class="shortcode_title title-center title-decoration-bottom-center">
                                <h3 class="title_primary">კატეგორია ჯერჯერობით დამუშავების სტადიაშია, რისთვისაც ბოდიშს გიხდით!</h3>
                            </div>
                        <?php endif;?>
                    </div>


                </div>
                <div class="widget-area col-sm-3 alignright">
                    <aside class="widget widget_text">
                        <img src="/travclub/web/images/images-sidebar/sidebanner-ticketing.jpg" alt="">
                    </aside>
                    <aside class="widget widget_text">
                        <img src="/travclub/web/images/images-sidebar/sidebanner-tour.png" alt="">
                    </aside>
                    <aside class="widget widget_text">
                        <img src="/travclub/web/images/images-sidebar/hertz-sidebanner.jpg" alt="">
                    </aside>
                </div>
            </div>
        </div>
    </section>
</div>