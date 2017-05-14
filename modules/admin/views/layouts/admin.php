<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;
use yii\bootstrap\Modal;


ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title>ადმინი | <?= Html::encode($this->title) ?></title>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

        <meta name="description" content=""/>
        <meta name="robots" content=""/>
        <link rel="canonical" href=""/>
        <link rel="next" href=""/>
        <meta property="og:locale" content="ka_GE"/>
        <meta property="og:locale:alternate" content="en_US"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="TRAVELERS CLUB"/>
        <meta property="og:description" content="Official Website of the Founders"/>
        <meta property="og:url" content="https://"/>
        <meta property="og:site_name" content=""/>
        <meta property="fb:app_id" content=""/>
        <meta property="og:image" content=""/>
        <meta name="twitter:card" content=""/>
        <meta name="twitter:description" content=""/>
        <meta name="twitter:title" content=""/>
        <meta name="twitter:image" content=""/>

        <link rel="shortcut icon" href="/travclub/web/images/favicon.png" type="image/x-icon">
        <?php $this->head() ?>
    </head>

    <body class="
<?php if($_SERVER['REQUEST_URI'] === '/travclub/'):?>transparent_home_page
<?php elseif ($_SERVER['REQUEST_URI'] === '/travclub/web/site/login'): ?>archive travel_tour travel_tour-page
<?php elseif ($_SERVER['REQUEST_URI'] === '/travclub/web/admin'): ?>archive travel_tour travel_tour-page
<?php elseif ($_SERVER['REQUEST_URI'] === '/travclub/web/admin/order'): ?>archive travel_tour travel_tour-page
<?php elseif ($_SERVER['REQUEST_URI'] === '/travclub/web/post/contact'): ?>archive
<?php elseif ($_SERVER['REQUEST_URI'] === '/travclub/web/blog/article'): ?>archive
<?php elseif ($_SERVER['REQUEST_URI'] === '/travclub/web/blog/article-single'): ?>archive
<?php elseif ($_SERVER['REQUEST_URI'] === '/travclub/web/blog/gallery'): ?>archive
<?php elseif ($_SERVER['REQUEST_URI'] === '/travclub/web/category/1'): ?>archive travel_tour travel_tour-page
<?php elseif ($_SERVER['REQUEST_URI'] === '/travclub/web/category/2'): ?>archive travel_tour travel_tour-page
<?php elseif ($_SERVER['REQUEST_URI'] === '/travclub/web/booking/checkout'): ?>travel_tour-checkout travel_tour-page
<?php elseif ($_SERVER['REQUEST_URI'] === '/travclub/web/product/1'): ?>single-product travel_tour-page travel_tour
<?php elseif ($_SERVER['REQUEST_URI'] === '/travclub/web/product/3'): ?>single-product travel_tour-page travel_tour
<?php elseif ($_SERVER['REQUEST_URI'] === '/travclub/web/tips/index'): ?>archive
<?php elseif ($_SERVER['REQUEST_URI'] === "/travclub/web/category/3"): ?>archive travel_tour travel_tour-page
<?php elseif ($_SERVER['REQUEST_URI'] === '/travclub/web/category/4'): ?>archive travel_tour travel_tour-page
<?php elseif ($_SERVER['REQUEST_URI'] === '/travclub/web/category/5'): ?>archive travel_tour travel_tour-page
<?php elseif ($_SERVER['REQUEST_URI'] === '/travclub/web/category/6'): ?>archive travel_tour travel_tour-page
<?php elseif ($_SERVER['REQUEST_URI'] === '/travclub/web/cart/view'): ?>single-product travel_tour-page travel_tour
<?php else:?>
single-product travel_tour-page travel_tour
<?php endif;?>">
    <?php $this->beginBody() ?>
    <div class="wrapper-container">
        <header id="masthead" class="site-header sticky_header affix-top">
            <div class="header_top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <aside id="text-15" class="widget_text">
                                <div class="textwidget">
                                    <ul class="top_bar_info clearfix">
                                        <li><i class="fa fa-clock-o"></i> ორშ - შაბ 9.00 - 18.00. კვირა დასვენება</li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-sm-8 topbar-right">
                            <aside id="text-7" class="widget widget_text">
                                <div class="textwidget">
                                    <ul class="top_bar_info clearfix">
                                        <li><i class="fa fa-phone"></i> 555555555</li>
                                        <li><i class="fa fa-envelope fa-fw"></i><a href="mailto:hello@siteinfo.com"> travelers@travclub.com</a></li>
                                        <li><a href="#" onclick="return getCart()"><i class="fa fa-shopping-cart"></i> კალათა</a></li>
                                    </ul>
                                </div>
                            </aside>
                            <aside id="travel_login_register_from-2" class="widget widget_login_form">
                                <?php if (!Yii::$app->user->isGuest):?>
                                    <a href="<?= \yii\helpers\Url::to('/travclub/web/site/logout')?>"> <span class="show_from login"><i class="fa fa-user"></i><?= Yii::$app->user->identity['username']?> (გასვლა)</span></a>
                                <?php endif;?>
                                <span class="show_from login"><a href="<?= Url::to('/travclub/web/admin')?>"><i class="fa fa-user"></i>ავტორიზაცია</a></span>

                                <div class="form_popup from_login" tabindex="-1">
                                    <div class="inner-form">
                                        <div class="closeicon"></div>
                                        <h3>ავტორიზაცია</h3>
                                        <form name="loginform" id="loginform" action="#" method="post">
                                            <p class="login-username">
                                                <label for="user_login">Username or Email Address</label>
                                                <input type="text" name="log" id="user_login" class="input" value="" size="20">
                                            </p>
                                            <p class="login-password">
                                                <label for="user_pass">Password</label>
                                                <input type="password" name="pwd" id="user_pass" class="input" value="" size="20">
                                            </p>
                                            <p class="login-remember">
                                                <label><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label>
                                            </p>
                                            <p class="login-submit">
                                                <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Log In">
                                                <input type="hidden" name="redirect_to" value="">
                                            </p>
                                        </form>
                                        <a href="#" title="Lost your password?" class="lost-pass">Lost your password?</a>
                                    </div>
                                </div>
                                <span class="register_btn">რეგისტრაცია</span>
                                <div class="form_popup from_register" tabindex="-1">
                                    <div class="inner-form">
                                        <div class="closeicon"></div>
                                        <h3>რეგისტრაცია</h3>
                                        <form method="post" class="register">
                                            <p class="form-row">
                                                <label for="reg_username">სახელი <span class="required">*</span></label>
                                                <input type="text" class="input" name="username" id="reg_username" value="" autocomplete="off">
                                            </p>
                                            <p class="form-row">
                                                <label for="reg_email">E-mail <span class="required">*</span></label>
                                                <input type="email" class="input" name="email" id="reg_email" value="">
                                            </p>
                                            <p class="form-row">
                                                <label for="reg_password">პაროლი <span class="required">*</span></label>
                                                <input type="password" class="input" name="password" id="reg_password">
                                            </p>
                                            <div style="left: -999em; position: absolute;">
                                                <label for="trap">Anti-spam</label><input type="text" name="email_2" id="trap" tabindex="-1" autocomplete="off">
                                            </div>
                                            <p class="form-row">
                                                <input type="submit" class="button" name="register" value="Register">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <div class="background-overlay"></div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navigation-menu">
                <div class="container">
                    <div class="menu-mobile-effect navbar-toggle button-collapse" data-activates="mobile-demo">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                    <div class="width-logo sm-logo">
                        <?php if($_SERVER['REQUEST_URI'] === '/travclub/'):?>
                            <a href="<?= Url::home();?>" title="Travelers club" rel="home">
                                <?= Html::img('@web/images/logo.png', ['alt' => 'Travelers club',  'class' => 'logo_transparent_static', 'width' => '474', 'height' => '130'])?>
                                <?= Html::img('@web/images/logo_sticky.png', ['alt' => 'Travelers club',  'class' => 'logo_sticky', 'width' => '474', 'height' => '130'])?>
                            </a>
                        <?php else:?>
                            <a href="<?= Url::home();?>" title="Travelers club" rel="home">
                                <?= Html::img('@web/images/logo_sticky.png', ['alt' => 'Travelers club',  'class' => 'logo_transparent_static', 'width' => '474', 'height' => '130'])?>
                                <?= Html::img('@web/images/logo_sticky.png', ['alt' => 'Travelers club',  'class' => 'logo_sticky', 'width' => '474', 'height' => '130'])?>
                            </a>
                        <?php endif;?>
                    </div>
                    <nav class="width-navigation">
                        <ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">
                            <li class="current-menu-ancestor current-menu-parent menu-item-has-children">
                                <a href="/travclub">მთავარი</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="/travclub/web/category/destination">სერვისები <i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="/travclub/web/category/list">მიმართულებები </a>
                                        <!--<ul class="sub-menu">
                                            <li><a href="/travclub/web/category/tour-list">სია</a></li>
                                            <li><a href="/travclub/web/category/tour-2-columns">სია 2 სვეტად</a></li>
                                            <li><a href="/travclub/web/category/tour">სია 3 სვეტად</a></li>
                                            <li><a href="/travclub/web/category/tour-3-columns">სია 3 სვეტად საიდბარის გარეშე</a></li>
                                            <li><a href="/travclub/web/category/tour-4-columns">სია 4 სვეტად</a></li>
                                        </ul>-->
                                    </li>
                                    <li><a href="#">
                                            ტურები</a>
                                        <ul class="sub-menu">
                                            <li><a href="/travclub/web/category/tour-list">შიდა ტურები</a></li>
                                            <li><a href="/travclub/web/category/tour">ტურები საზღვარგარეთ</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">ექსკურსიები </a></li>
                                    <li><a href="#">ღონისძიებები </a></li>
                                    <li><a href="/travclub/web/category/46">კურორტები </a></li>
                                    <li><a href="/travclub/web/blog/gallery">გალერეა</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#">დაჯავშნა  <i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="/travclub/web/blog/gallery">სასტუმროები</a></li>
                                    <li><a href="typography.html">ავიაბილეთები</a></li>
                                    <li><a href="typography.html">მატარებლის ბილეთები</a></li>
                                    <li><a href="typography.html">ავტობუსის ბილეთები</a></li>
                                    <li><a href="/travclub/web/booking/checkout">გადახდა</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">რჩევები <i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="/travclub/web/tips/index">რჩევები მოგზაურთათვის</a></li>
                                    <li><a href="/travclub/web/tips/view">ტერმინები და სიმბოლოები</a></li>
                                </ul>
                            </li>

                            <li><a href="/travclub/web/blog/">ბლოგი</a></li>

                            <li><a href="/travclub/web/post/contact">კონტაქტები</a></li>
                            <li class="menu-right">
                                <ul>
                                    <li id="travel_social_widget-2" class="widget travel_search">
                                        <div class="search-toggler-unit">
                                            <div class="search-toggler">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                        <div class="search-menu search-overlay search-hidden">
                                            <div class="closeicon"></div>
                                            <form role="search" method="get" class="search-form" action="<?= \yii\helpers\Url::to(['category/search'])?>">
                                                <input type="search" class="search-field" placeholder="Search ..." value="" name="q" title="Search for:">
                                                <input type="submit" class="search-submit font-awesome" value="&#xf002;">
                                            </form>
                                            <div class="background-overlay"></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <?= $content; ?>
        <div class="wrapper-footer wrapper-footer-newsletter">
            <div class="main-top-footer">
                <div class="container">
                    <div class="row">
                        <aside class="col-sm-3 widget_text"><h3 class="widget-title">ჩვენი მისამართია:</h3>
                            <div class="textwidget">
                                <div class="footer-info">
                                    <p>Lorem ipsum dolor sit amet, cons ectetueradipiscing elit, sed diam nonu my nibh euis motincidunt ut laoreetd
                                    </p>
                                    <ul class="contact-info">
                                        <li><i class="fa fa-map-marker fa-fw"></i> ქ. ზუგდიდი, გ. ლეონიძის №18</li>
                                        <li><i class="fa fa-phone fa-fw"></i> +995 555 555 555</li>
                                        <li>
                                            <i class="fa fa-envelope fa-fw"></i><a href="mailto:hello@siteinfo.com"> travelers@travclub.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                        <aside class="col-sm-3 widget_text"><h3 class="widget-title">ინფორმაცია</h3>
                            <div class="textwidget">
                                <ul class="menu list-arrow">
                                    <li><a href="#">საინფორმაციო ცენტრი</a></li>
                                    <li><a href="#">სიახლეები</a></li>
                                    <li><a href="#">ტურები</a></li>
                                    <li><a href="#">დასვენება</a></li>
                                    <li><a href="#">დაჯავშნა</a></li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="col-sm-3 widget_text"><h3 class="widget-title">მენიუ</h3>
                            <div class="textwidget">
                                <ul class="menu list-arrow">
                                    <li><a href="#">ჩვენს შესახებ</a></li>
                                    <li><a href="#">კარიერა</a></li>
                                    <li><a href="#">ტერმინები</a></li>
                                    <li><a href="#">კონფიდენციალურობა</a></li>
                                    <li><a href="#">კონტაქტები</a></li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="col-sm-3 custom-instagram widget_text">
                            <h3 class="widget-title">შემოგვიერთდით</h3>
                            <div class="textwidget">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Instagram"><img src="/travclub/web/images/instagram/1.jpg" alt="instagram"></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><img src="/travclub/web/images/instagram/2.jpg" alt="instagram"></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="LinkedIn"><img src="/travclub/web/images/instagram/3.jpg" alt="instagram"></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="YouTube"><img src="/travclub/web/images/instagram/4.jpg" alt="instagram"></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><img src="/travclub/web/images/instagram/4.jpg" alt="instagram"></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Pinterest"><img src="/travclub/web/images/instagram/6.jpg" alt="instagram"></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Google+"><img src="/travclub/web/images/instagram/6.jpg" alt="instagram"></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Viber"><img src="/travclub/web/images/instagram/6.jpg" alt="instagram"></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Skype"><img src="/travclub/web/images/instagram/6.jpg" alt="instagram"></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="container wrapper-copyright">
                <div class="row">
                    <div class="col-sm-6">
                        <div><p>Copyright © 2017 Travelers Club. All Rights Reserved.</p></div>
                    </div>
                    <div class="col-sm-6">
                        <aside id="text-5" class="widget_text">
                            <div class="textwidget">
                                <ul class="footer_menu">
                                    <li><a href="<?= \yii\helpers\Url::to(['/admin']) ?>" class="active">ადმინი</a></li>
                                    <li>|</li>
                                    <li><a href="<?= \yii\helpers\Url::to(['category/index']) ?>">კატეგორიები</a></li>
                                    <li>|</li>
                                    <li><a href="<?= \yii\helpers\Url::to(['category/create'])?>">კატეგორიის დამატება</a></li>
                                    <li>|</li>
                                    <li><a href="<?= \yii\helpers\Url::to(['product/index'])?>">პროდუქტების სია</a></li>
                                    <li>|</li>
                                    <li><a href="<?= \yii\helpers\Url::to(['blog/index'])?>">ბლოგი</a></li>
                                    <li>|</li>
                                    <li><a href="<?= \yii\helpers\Url::to(['article/index'])?>">სტატიები</a></li>

                                    <li><a href="https://twitter.com/physcode"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/physcode/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/physcode/"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-subscribe" style="background-image: url(/travclub/web/images/home/bg_newletter.jpg)">
            <div class="subscribe_shadow"></div>
            <div class="form-subscribe parallax-section stick-to-bottom form-subscribe-full-width">
                <div class="shortcode_title text-white title-center title-decoration-bottom-center margin-bottom-3x">
                    <div class="title_subtitle">ყოველთვიურად მიიღეთ ჩვენი საუკეთესო შემოთავაზებები</div>
                    <h3 class="title_primary">გამოიწერეთ საინფორმაციო ბიულეტენი</h3>
                    <span class="line_after_title"></span>
                </div>
                <div class="form-subscribe-form-wrap">
                    <aside class="mailchimp-container">
                        <form class="epm-sign-up-form" name="epm-sign-up-form" action="#" method="post">
                            <div class="epm-form-field">
                                <label for="epm-email">Email Address</label>
                                <input type="email" placeholder="თქვენი e-mail" name="epm-email" tabindex="8" class="email" id="epm-email" value="">
                            </div>


                            <input type="submit" name="epm-submit-chimp" placeholder="დარეგისტრირდით" value="Sign Up Now" data-wait-text="Please wait..." tabindex="10" class="button btn epm-sign-up-button epm-submit-chimp">
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    <?= \ibrarturi\scrollup\ScrollUp::widget([
        'theme' => 'image',   // pill, link, image, tab
    ]); ?>



    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>