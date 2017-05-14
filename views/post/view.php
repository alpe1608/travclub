<?php
use yii\helpers\Html;
use app\assets\CatAppAsset;
use borales\extensions\phoneInput\PhoneInput;
CatAppAsset::register($this);
?>
<?= Html::encode($this->title) ?>
<div class="site wrapper-content">
    <div class="top_site_main" style="background-image:url(/travclub/web/images/banner/top-heading.jpg);">
        <div class="banner-wrapper container article_heading">
            <div class="breadcrumbs-wrapper">
                <ul class="phys-breadcrumb">
                    <li><a href="index.html" class="home">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
            <h1 class="heading_primary">Contact</h1></div>
    </div>
    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="site-main col-sm-9 alignleft">
                    <div class="video-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6304.829986131271!2d-122.4746968033092!3d37.80374752160443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808586e6302615a1%3A0x86bd130251757c00!2sStorey+Ave%2C+San+Francisco%2C+CA+94129!5e0!3m2!1sen!2sus!4v1435826432051" width="600" height="450" style="border: 0; pointer-events: none;" allowfullscreen=""></iframe>
                    </div>
                    <div class="pages_content padding-top-4x">
                        <h4>საკონტაქტო ინფორმაცია</h4>
                        <div class="contact_infor">
                            <ul>
                                <li><label><i class="fa fa-map-marker"></i>მისამართი</label>
                                    <div class="des">ქ. ზუგდიდი, ლეონიძის №18</div>
                                </li>
                                <li><label><i class="fa fa-phone"></i>ტელეფონი</label>
                                    <div class="des">+012345678 (ტურები) | +0123456789 (ბილეთები)</div>
                                </li>
                                <li><label><i class="fa fa-print"></i>ფაქსი</label>
                                    <div class="des">+012345678 (ტურები) | +123456789 (ბილეთები)</div>
                                </li>
                                <li><label><i class="fa fa-envelope"></i>E-MAIL</label>
                                    <div class="des">travelers@travclub.com (ტურები) | travelers@travclub.com (ბილეთები)</div>
                                </li>
                                <li>
                                    <label><i class="fa fa-clock-o"></i>მუშაობის გრაფიკი</label>
                                    <div class="des">ორშ – პარ 9:00 – 20:00, შაბ 9:00 – 15: 00
                                        <br>
                                        We are closed on 1st &amp; 3rd Sat of every month, Sundays &amp; public holidays
                                    </div>
                                </li>
                                <li>
                                    <label><i class="fa fa-map-marker"></i>GPS კოორდინატები</label>
                                    <div class="des">Latitude : 3.1117181000, Longitude : 101.7301577000</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="wpb_wrapper pages_content">
                        <h4>თქვენი შეტყობინება</h4>
                        <div role="form" class="wpcf7">
                            <div class="screen-reader-response"></div>
                            <form action="#" method="post" class="wpcf7-form" novalidate="novalidate">
                                <div class="form-contact">
                                    <div class="row-1x">
                                        <div class="col-sm-6">
													<span class="wpcf7-form-control-wrap your-name">
														<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control" placeholder="სახელი*">
													</span>
                                        </div>
                                        <div class="col-sm-6">
													<span class="wpcf7-form-control-wrap your-email">
														<input type="email" name="your-email" value="" size="40" class="wpcf7-form-control" placeholder="e-mail*">
													</span>
                                        </div>
                                    </div>
                                    <div class="form-contact-fields">
												<span class="wpcf7-form-control-wrap your-subject">
													<input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control" placeholder="შეტყობინების სათაური">
												</span>
                                    </div>
                                    <div class="form-contact-fields">
											<span class="wpcf7-form-control-wrap your-message">
												<textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="შეტყობინება"></textarea>
												 </span><br>
                                        <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="widget-area col-sm-3 align-left">
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
