<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
Use app\assets\CatAppAsset;
use yii\widgets\LinkPager;

CatAppAsset::register($this);
?>
<?= Html::encode($this->title); ?>

<div class="site wrapper-content">
    <div class="top_site_main" style="background-image:url(/travclub/web/images/banner/top-heading.jpg);">
        <div class="banner-wrapper container article_heading">
            <div class="breadcrumbs-wrapper">
                <ul class="phys-breadcrumb">
                    <li><a href="index.html" class="home">Home</a></li>
                    <li>Tours List</li>
                </ul>
            </div>
            <h1 class="heading_primary">Tours List</h1>
        </div>
    </div>
    <section class="content-area">
        <div style="text-align: right; margin-right: 5%; padding-bottom: 2%;"><a href="">list</a>&nbsp;&nbsp;<a href="">2-columns</a> </div>
        <div class="container">
            <div class="row">
                <div class="site-main col-sm-9 alignright">
                    <div class="shortcode_title title-center title-decoration-bottom-center">
                        <h3 class="title_primary">თქვენ ეძებდით: <?= Html::encode($q)?></h3><span class="line_after_title"></span>
                    </div>
                    <ul class="tours products wrapper-tours-slider">

                        <?php if (  !empty($products) ) :?>

                            <?php foreach ($products as $product):?>

                                <li class="item-list-tour col-md-12 product">
                                    <div class="content-list-tour">
                                        <div class="post_images">
                                            <a href="<?= Url::to(['product/view', 'id' => $product->id]) ?>">
                                        <span class="price"><del>
												<span class="travel_tour-Price-amount amount">$<?= $product->price_old?></span></del>
												<ins><span class="travel_tour-Price-amount amount">$<?= $product->price?></span></ins>
											</span>
                                                <?php if ($product->sale):?>
                                                    <span class="onsale">Sale!</span>
                                                <?php endif;?>
                                                <?= Html::img("@web/images/products/$product->img", ['alt' => $product->name])?>
                                            </a>
                                            <div class="group-icon">
                                                <?php if ($product->ship):?>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-sea-ship"></i></a>
                                                <?php endif;?>
                                                <?php if ($product->car):?>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-sea-ship"></i></a>
                                                <?php endif;?>
                                                <?php if ($product->horse):?>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-sea-ship"></i></a>
                                                <?php endif;?>
                                                <?php if ($product->bike):?>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-sea-ship"></i></a>
                                                <?php endif;?>
                                                <?php if ($product->walk):?>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-sea-ship"></i></a>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                        <div class="wrapper_content">
                                            <div class="content-left">
                                                <div class="post_title"><h4>
                                                        <a href="<?= Url::to(['product/view', 'id' => $product->id]) ?>" rel="bookmark"><?= $product->name?></a>
                                                    </h4></div>
                                                <div class="description">
                                                    <?= $product->annotation?>
                                                </div>
                                                <span class="post_date"><?= $product->day?> დღე <?= $product->night?> ღამე</span></div>
                                            <div class="content-right">
                                                <div class="item_rating">
                                                    <div class="item_rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <span class="price">$<?= $product->price?></span>
                                                <a rel="nofollow" href="<?= Url::to(['product/view', 'id' => $product->id]) ?>" class="button product_type_tour_phys add_to_cart_button">დეტალები</a>
                                                <a href="<?= Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?= $product->id?>" class="button product_type_tour_phys add_to_cart_button add-to-cart">დაჯავშნა</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach;?>
                            <div class="clearfix"></div>
                            <div class="navigation paging-navigation" role="navigation">
                                <ul class="page-numbers">
                                    <li>
                                        <?php
                                        echo LinkPager::widget([
                                            'pagination' => $pages,
                                        ]);
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        <?php else : ?>
                            <div class="shortcode_title title-center title-decoration-bottom-center">
                                <h3 class="title_primary">ვერაფერი არ მოიძებნა.....</h3>
                            </div>
                        <?php endif;?>
                    </ul>
                </div>
                <div class="widget-area align-left col-sm-3">
                    <div class="search_tour">
                        <div class="form-block block-after-indent">
                            <h3 class="form-block_title">Search Tour</h3>
                            <div class="form-block__description">Find your dream tour today!</div>
                            <form method="get" action="#">
                                <input type="hidden" name="tour_search" value="1">
                                <input type="text" placeholder="Search Tour" value="" name="name_tour">
                                <select name="tourtax[tour_phys]">
                                    <option value="0">Tour Type</option>
                                    <option value="escorted-tour">Escorted Tour</option>
                                    <option value="rail-tour">Rail Tour</option>
                                    <option value="river-cruise">River Cruise</option>
                                    <option value="tour-cruise">Tour &amp; Cruise</option>
                                    <option value="wildlife">Wildlife</option>
                                </select>
                                <select name="tourtax[pa_destination]">
                                    <option value="0">Destination</option>
                                    <option value="china">Brazil</option>
                                    <option value="canada">Canada</option>
                                    <option value="cuba">Cuba</option>
                                    <option value="italy">Italy</option>
                                    <option value="philippines">Philippines</option>
                                    <option value="usa">USA</option>
                                </select>
                                <select name="tourtax[pa_month]">
                                    <option value="0">Month</option>
                                    <option value="january">January</option>
                                    <option value="february">February</option>
                                    <option value="march">March</option>
                                    <option value="april">April</option>
                                    <option value="may">May</option>
                                    <option value="june">June</option>
                                    <option value="july">July</option>
                                    <option value="august">August</option>
                                    <option value="september">September</option>
                                    <option value="october">October</option>
                                    <option value="november">November</option>
                                    <option value="december">December</option>
                                </select>
                                <button type="submit">Find Tours</button>
                            </form>
                        </div>
                    </div>
                    <ul class="catalog category-products">
                        <?= \app\components\MenuWidget::widget(['tpl' => 'menu'])?>
                    </ul>


                    <aside class="widget widget_travel_tour">
                        <div class="wrapper-special-tours">
                            <div class="inner-special-tours">
                                <a href="/travclub/web/product/tour-single">
                                    <img width="430" height="305" src="/travclub/web/images/tour/430x305/tour-1.jpg" alt="Discover Brazil" title="Discover Brazil"></a>
                                <div class="item_rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="post_title"><h3>
                                        <a href="/travclub/web/product/tour-single" rel="bookmark">Discover Brazil</a>
                                    </h3></div>
                                <div class="item_price">
                                    <span class="price">$93.00</span>
                                </div>
                            </div>
                            <div class="inner-special-tours">
                                <a href="/travclub/web/product/tour-single">
                                    <span class="onsale">Sale!</span>
                                    <img width="430" height="305" src="/travclub/web/images/tour/430x305/tour-2.jpg" alt="Discover Brazil" title="Discover Brazil"></a>
                                <div class="item_rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="post_title"><h3>
                                        <a href="/travclub/web/product/tour-single" rel="bookmark">Kiwiana Panorama</a>
                                    </h3></div>
                                <div class="item_price">
										<span class="price"><del>$87.00</del>
										<ins>$82.00</ins></span>
                                </div>
                            </div>
                            <div class="inner-special-tours">
                                <a href="/travclub/web/product/tour-single">
                                    <img width="430" height="305" src="/travclub/web/images/tour/430x305/tour-3.jpg" alt="Discover Brazil" title="Discover Brazil">
                                </a>
                                <div class="item_rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="post_title"><h3>
                                        <a href="/travclub/web/product/tour-single" rel="bookmark">Anchorage to Quito</a>
                                    </h3></div>
                                <div class="item_price">
                                    <span class="price">$64.00</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</div>