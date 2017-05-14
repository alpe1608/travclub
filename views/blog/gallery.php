<?php
use yii\helpers\Html;
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
                    <li>Gallery</li>
                </ul>
            </div>
            <h1 class="heading_primary">Gallery</h1></div>
    </div>
    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="site-main col-sm-12 full-width">
                    <div class="sc-gallery wrapper_gallery">
                        <div class="gallery-tabs-wrapper filters">
                            <ul class="gallery-tabs">
                                <li><a href="#" data-filter="*" class="filter active">all</a></li>
                                <li><a href="#" data-filter=".competitions" class="filter">Competitions</a></li>
                                <li><a href="#" data-filter=".gears" class="filter">Gears</a></li>
                                <li><a href="#" data-filter=".iinstructional" class="filter">Iinstructional</a></li>
                                <li><a href="#" data-filter=".swimbaits" class="filter">Swimbaits</a></li>
                            </ul>
                        </div>
                        <div class="row content_gallery">
                            <div class="col-sm-4 gallery_item-wrap competitions gears">
                                <a href="/travclub/web/images/tour/tour-1.jpg" class="swipebox" title="World’s hottest destinations for vegans">
                                    <img src="/travclub/web/images/tour/430x305/tour-1.jpg" alt="World’s hottest destinations for vegans">
                                    <div class="gallery-item">
                                        <h4 class="title">World’s hottest destinations for vegans</h4>
                                    </div>
                                </a></div>
                            <div class="col-sm-4 gallery_item-wrap iinstructional swimbaits">
                                <a href="/travclub/web/images/tour/tour-2.jpg" class="swipebox" title="Love advice from experts">
                                    <img src="/travclub/web/images/tour/430x305/tour-2.jpg" alt="Love advice from experts">
                                    <div class="gallery-item"><h4 class="title">Love advice from experts</h4></div>
                                </a></div>
                            <div class="col-sm-4 gallery_item-wrap gears iinstructional">
                                <a href="/travclub/web/images/tour/tour-3.jpg" class="swipebox" title="The perfect summer body">
                                    <img src="/travclub/web/images/tour/430x305/tour-3.jpg" alt="The perfect summer body">
                                    <div class="gallery-item"><h4 class="title">The perfect summer body</h4></div>
                                </a></div>
                            <div class="col-sm-4 gallery_item-wrap competitions swimbaits">
                                <a href="/travclub/web/images/tour/tour-4.jpg" class="swipebox" title="A rare opportunity to try Foundry coffee">
                                    <img src="/travclub/web/images/tour/430x305/tour-4.jpg" alt="A rare opportunity to try Foundry coffee">
                                    <div class="gallery-item">
                                        <h4 class="title">A rare opportunity to try Foundry coffee</h4></div>
                                </a></div>
                            <div class="col-sm-4 gallery_item-wrap competitions iinstructional">
                                <a href="/travclub/web/images/tour/tour-5.jpg" class="swipebox" title="7 Things You Tell People">
                                    <img src="/travclub/web/images/tour/430x305/tour-5.jpg" alt="7 Things You Tell People">
                                    <div class="gallery-item"><h4 class="title">7 Things You Tell People</h4></div>
                                </a></div>
                            <div class="col-sm-4 gallery_item-wrap gears swimbaits">
                                <a href="/travclub/web/images/tour/tour-6.jpg" class="swipebox" title="The Sun Is Underappreciated">
                                    <img src="/travclub/web/images/tour/430x305/tour-6.jpg" alt="The Sun Is Underappreciated">
                                    <div class="gallery-item"><h4 class="title">The Sun Is Underappreciated</h4>
                                    </div>
                                </a></div>
                            <div class="col-sm-4 gallery_item-wrap gears iinstructional">
                                <a href="/travclub/web/images/tour/tour-3.jpg" class="swipebox" title="An Overly Close">
                                    <img src="/travclub/web/images/tour/430x305/tour-3.jpg" alt="An Overly Close">
                                    <div class="gallery-item"><h4 class="title">An Overly Close</h4></div>
                                </a></div>
                            <div class="col-sm-4 gallery_item-wrap gears swimbaits">
                                <a href="/travclub/web/images/tour/tour-1.jpg" class="swipebox" title="The Santa Barbara Wildfire">
                                    <img src="/travclub/web/images/tour/430x305/tour-1.jpg" alt="The Santa Barbara Wildfire">
                                    <div class="gallery-item"><h4 class="title">The Santa Barbara Wildfire</h4>
                                    </div>
                                </a></div>
                            <div class="col-sm-4 gallery_item-wrap gears iinstructional">
                                <a href="/travclub/web/images/tour/tour-2.jpg" class="swipebox" title="A Perfect Day in the Nature">
                                    <img src="/travclub/web/images/tour/tour-2.jpg" alt="A Perfect Day in the Nature">
                                    <div class="gallery-item"><h4 class="title">A Perfect Day in the Nature</h4>
                                    </div>
                                </a></div>
                            <div class="col-sm-4 gallery_item-wrap competitions iinstructional">
                                <a href="/travclub/web/images/tour/tour-4.jpg" class="swipebox" title="A smile is a sign of friendliness">
                                    <img src="/travclub/web/images/tour/430x305/tour-4.jpg" alt="A smile is a sign of friendliness">
                                    <div class="gallery-item">
                                        <h4 class="title">A smile is a sign of friendliness</h4></div>
                                </a></div>
                            <div class="col-sm-4 gallery_item-wrap gears swimbaits">
                                <a href="/travclub/web/images/tour/tour-5.jpg" class="swipebox" title="A happy fammily">
                                    <img src="/travclub/web/images/tour/430x305/tour-5.jpg" alt="A happy fammily">
                                    <div class="gallery-item"><h4 class="title">A happy fammily</h4></div>
                                </a></div>
                            <div class="col-sm-4 gallery_item-wrap competitions iinstructional">
                                <a href="/travclub/web/images/tour/tour-3.jpg" class="swipebox" title="You big profit">
                                    <img src="/travclub/web/images/tour/430x305/tour-3.jpg" alt="You big profit">
                                    <div class="gallery-item"><h4 class="title">You big profit</h4></div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>