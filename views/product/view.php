<?php
use yii\helpers\Html;
use yii\helpers\Url;
Use app\assets\TourAppAsset;
TourAppAsset::register($this);
?>
<?= Html::encode($this->title) ?>
<div class="site wrapper-content">
    <div class="top_site_main" style="background-image:url(/travclub/web/images/banner/top-heading.jpg);">
        <div class="banner-wrapper container article_heading">
            <div class="breadcrumbs-wrapper">
                <ul class="phys-breadcrumb">
                    <li><a href="<?= Url::home();?>" class="home">მთავარი</a></li>
                    <li><a href="<?= Url::to('/travclub/web/categoty/list')?>">მიმართულებები</a></li>
                    <li><a href="<?= Url::to(['category/view', 'id' => $product->category->id])?>"><?= $product->category->name?></a></li>
                </ul>
            </div>
            <h2 class="heading_primary"><?= $product->name?></h2></div>
    </div>

    <?php
    $mainImg = $product->getImage();
    $gallery = $product->getImages();
    ?>

    <section class="content-area single-woo-tour">
        <div class="container">
            <div class="tb_single_tour product">
                <div class="top_content_single row">
                    <div class="images images_single_left">
                        <div class="title-single">
                            <div class="title">
                                <h1><?= $product->name?></h1>
                            </div>
                            <div class="tour_code">
                                <strong>Code: </strong>LMJUYH
                            </div>
                        </div>
                        <div class="tour_after_title">
                            <div class="meta_date">
                                <span><?= $product->day?> დღე <?= $product->night?> ღამე</span>
                            </div>
                            <div class="meta_values">
                                <span>კატეგორია:</span>
                                <div class="value">
                                    <a href="<?= Url::to(['category/view', 'id' => $product->category->id])?>" rel="tag"><?= $product->category->name?></a>
                                    <a href="#" rel="tag"></a>
                                </div>
                            </div>
                            <div class="tour-share">
                                <ul class="share-social">
                                    <li>
                                        <a target="_blank" class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" class="googleplus" href="#"><i class="fa fa-google"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <?php $i = 0; foreach($gallery as $img):?>
                                <li>
                                    <a href="<?php echo Url::to($img->getUrl('950x700'))?>" class="swipebox" title="">
                                    <?= Html::img($img->getUrl(), ['alt' => $img->name, 'width' => '950', 'height' => '700', 'class' => 'attachment-shop_single size-shop_single wp-post-image', 'draggable' => 'false'])?></a>
                                    <?php $i++ ?>
                                </li>

                                <?php endforeach;?>
                            </ul>
                        </div>

                        <div id="carousel" class="flexslider thumbnail_product">
                            <ul class="slides">
                                <?php $count = count($gallery); $i = 0; foreach ($gallery as $img): ?>
                                <li>
                                    <?= Html::img($img->getUrl('150x100'), ['alt' => $img->name, 'class' => 'attachment-shop_thumbnail size-shop_thumbnail wp-post-image', 'draggable' => 'false'])?>
                                     <?php $i++; if ($i % 3 == 0 || $i == $count):?>
                                </li>
                                        <?php endif;?>

                                <?php endforeach;?>
                            </ul>

                        </div>

                        <div class="clear"></div>
                        <div class="single-tour-tabs wc-tabs-wrapper">
                            <ul class="tabs wc-tabs" role="tablist">
                                <li class="description_tab active" role="presentation">
                                    <a href="#tab-description" role="tab" data-toggle="tab">აღწერა</a>
                                </li>
                                <li class="itinerary_tab_tab" role="presentation">
                                    <a href="#tab-itinerary_tab" role="tab" data-toggle="tab">
                                        <?php if ($product->hide == 0):?>
                                        მარშრუტი
                                        <?php else:?>
                                            რა ვნახოთ?
                                        <?php endif;?>
                                    </a>
                                </li>
                                <?php if ($product->hide == 1):?>
                                <li class="itinerary_tab_tab" role="presentation">
                                    <a href="#tab-placement_tab" role="tab" data-toggle="tab">განთავსება</a>
                                </li>
                                <?php endif;?>
                                <li class="location_tab_tab" role="presentation">
                                    <a href="#tab-location_tab" role="tab" data-toggle="tab">რუქაზე</a>
                                </li>
                                <li class="reviews_tab" role="presentation">
                                    <a href="#tab-reviews" role="tab" data-toggle="tab">გამოხმაურება</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--description panel entry-content wc-tab active" id="tab-description">
                                    <?= $product->about?>
                                </div>
                                <div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--itinerary_tab panel entry-content wc-tab" id="tab-itinerary_tab">
                                    <?= $product->itinerary?>
                                </div>
                                <?php if ($product->hide == 1):?>
                                <div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--placement_tab panel entry-content wc-tab" id="tab-placement_tab">
                                    <?= $product->itinerary?>
                                </div>
                                <?php endif;?>
                                <div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--location_tab panel entry-content wc-tab" id="tab-location_tab">
                                    <div class="wrapper-gmap">
                                        <div id="googleMapCanvas" class="google-map" data-lat="<?= $product->data_lat?>" data-long="<?= $product->data_long?>" data-address="<?= $product->data_address?>"></div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews">
                                    <div id="reviews" class="travel_tour-Reviews">
                                        <div id="comments">
                                            <h2 class="travel_tour-Reviews-title">1 review for
                                                <span>Kiwiana Panorama</span></h2>
                                            <ol class="commentlist">
                                                <li itemscope="" itemtype="http://schema.org/Review" class="comment byuser comment-author-physcode bypostauthor even thread-even depth-1" id="li-comment-62">
                                                    <div id="comment-62" class="comment_container">
                                                        <img alt="" src="/travclub/web/images/avata.jpeg" class="avatar avatar-60 photo" height="60" width="60">
                                                        <div class="comment-text">
                                                            <div class="star-rating" title="Rated 4 out of 5">
                                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                            </div>
                                                            <p class="meta">
                                                                <strong>physcode</strong> –
                                                                <time datetime="2017-01-24T03:54:04+00:00">January 24, 2017</time>
                                                                :
                                                            </p>
                                                            <div class="description">
                                                                <p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                        <div id="review_form_wrapper">
                                            <div id="review_form">
                                                <div id="respond" class="comment-respond">
                                                    <h3 id="reply-title" class="comment-reply-title">Add a review</h3>
                                                    <form action="#" method="post" id="commentform" class="comment-form" novalidate="">
                                                        <p class="comment-notes">
                                                            <span id="email-notes">Your email address will not be published.</span> Required fields are marked
                                                            <span class="required">*</span></p>
                                                        <p class="comment-form-author"><label for="author">Name
                                                                <span class="required">*</span></label>
                                                            <input id="author" name="author" type="text" value="" size="30" required="">
                                                        </p>
                                                        <p class="comment-form-email"><label for="email">Email
                                                                <span class="required">*</span></label>
                                                            <input id="email" name="email" type="email" value="" size="30" required="">
                                                        </p>
                                                        <p class="comment-form-rating">
                                                            <label>Your Rating</label>
                                                        </p>
                                                        <p class="stars">
																<span>
																	<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
 																 </span>
                                                        </p>

                                                        <p class="comment-form-comment">
                                                            <label for="comment">Your Review
                                                                <span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea>
                                                        </p>
                                                        <p class="form-submit">
                                                            <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                        </p></form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if( !empty($relats) ): ?>

                        <div class="related tours">
                            <h2>დაკავშირებული ტურები</h2>
                            <ul class="tours products wrapper-tours-slider">

                            <?php foreach ($relats as $relat): ?>

                                <?php
                                $mainImg = $relat->getImage();
                                $gallery = $relat->getImages();
                                ?>

                                <li class="item-tour col-md-4 col-sm-6 product">
                                    <div class="item_border item-product">
                                        <div class="post_images">
                                            <a href="<?= Url::to(['product/view', 'id' => $relat->id]) ?>">
                                                <span class="price">$<?= $relat->price?></span>
                                                <?php if ($relat->sale):?>
                                                    <span class="onsale">Sale!</span>
                                                <?php endif;?>

                                                <?= Html::img($mainImg->getUrl('430x305'), ['alt' => $relat->name, 'title' => $relat->name,])?>
                                            </a>
                                            <div class="group-icon">
                                                <?php if ($relat->ship):?>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-sea-ship"></i></a>
                                                <?php endif;?>
                                                <?php if ($relat->car):?>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-sea-ship"></i></a>
                                                <?php endif;?>
                                                <?php if ($relat->horse):?>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-sea-ship"></i></a>
                                                <?php endif;?>
                                                <?php if ($relat->bike):?>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-sea-ship"></i></a>
                                                <?php endif;?>
                                                <?php if ($relat->walk):?>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-sea-ship"></i></a>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                        <div class="wrapper_content">
                                            <div class="post_title"><h4>
                                                    <a href="<?= Url::to(['product/view', 'id' => $relat->id]) ?>" rel="bookmark"><?= $relat->name?></a>
                                                </h4></div>
                                            <span class="post_date"><?= $relat->day?> დღე <?= $relat->night?> ღამე</span>
                                            <div class="description">
                                                <?= $relat->annotation?>
                                            </div>
                                        </div>
                                        <div class="read_more">
                                            <div class="item_rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <a rel="nofollow" href="<?= Url::to(['product/view', 'id' => $relat->id]) ?>" class="button product_type_tour_phys add_to_cart_button">დეტალები</a>
                                        </div>
                                    </div>
                                </li>

                            <?php endforeach;?>

                            </ul>
                        </div>

                        <?php endif;?>

                    </div>
                    <div class="summary entry-summary description_single">
                        <div class="affix-sidebar">
                            <div class="entry-content-tour">
                                <p class="price">
                                    <span class="text">Price:</span><span class="travel_tour-Price-amount amount">$<?= $product->price?></span>
                                </p>
                                <div class="clear"></div>
                                <div class="booking">
                                    <div class="">
                                        <div class="form-block__title">
                                            <h4>Book the tour</h4>
                                        </div>
                                        <form id="tourBookingForm" method="POST" action="#">
                                            <div class="">
                                                <input name="first_name" value="" placeholder="First name" type="text">
                                            </div>
                                            <div class="">
                                                <input name="last_name" value="" placeholder="Last name" type="text">
                                            </div>
                                            <div class="">
                                                <input name="email_tour" value="" placeholder="Email" type="text">
                                            </div>
                                            <div class="">
                                                <input name="phone" value="" placeholder="Phone" type="text">
                                            </div>
                                            <div class="">
                                                <input type="text" name="date_book" value="" placeholder="Date Book" class="hasDatepicker">
                                            </div>
                                            <div class="from-group">
                                                <div class="total_price_arrow">
                                                    <div class="st_adults_children">
                                                        <span class="label">Adults</span>
                                                        <div class="input-number-ticket">
                                                            <input type="number" name="number_ticket" value="1" id= 'qty' min="1" max="10" placeholder="Number ticket of Adults">
                                                        </div>
                                                        ×
                                                        $<span class="price_adults"><?= $product->price?></span>
                                                        =
                                                        <span class="total_price_adults">$93</span>
                                                    </div>
                                                    <div class="st_adults_children">
                                                        <span class="label">Children</span>
                                                        <div class="input-number-ticket">
                                                            <input type="number" name="number_children" value="0" min="0" max="10" placeholder="Number ticket of Children">
                                                            <input type="hidden" name="price_child" value="65.1">
                                                            <input type="hidden" name="price_child_set_on_tour" value="0">
                                                        </div>
                                                        ×
                                                        $<span class="price_children">65.1</span>
                                                        =
                                                        <span class="total_price_children">0</span>
                                                    </div>
                                                    <div>
                                                        Total =
                                                        <span class="total_price_adults_children">$93</span>
                                                    </div>
                                                    <input type="hidden" name="price_children_percent" value="70">
                                                </div>
                                            </div>
                                            <div class="spinner">
                                                <div class="rect1"></div>
                                                <div class="rect2"></div>
                                                <div class="rect3"></div>
                                                <div class="rect4"></div>
                                                <div class="rect5"></div>
                                            </div>
                                            <a href="<?= Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?= $product->id?>" class="btn-booking btn add-to-cart cart">დაჯავშნა</a>
                                        </form>
                                    </div>
                                </div>
                                <div class="form-block__title custom-form-title"><h4>Or</h4></div>
                                <div class="custom_from">
                                    <div role="form" class="wpcf7" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action="#" method="post" class="wpcf7-form" novalidate="novalidate">

                                            <p>Fill up the form below to tell us what you're looking for</p>
                                            <p>
													<span class="wpcf7-form-control-wrap your-name">
														<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Your name*">
													</span>
                                            </p>
                                            <p>
													<span class="wpcf7-form-control-wrap your-email">
														<input type="email" name="your-email" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Email*">
													</span>
                                            </p>
                                            <p>
													<span class="wpcf7-form-control-wrap your-message">
														<textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control" aria-invalid="false" placeholder="Message"></textarea>
													</span>
                                            </p>
                                            <p>
                                                <input type="submit" value="Send Enquiry" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <?php if ( !empty($relats) ):?>
                            <div class="widget-area align-left col-sm-3">
                                <aside class="widget widget_travel_tour">
                                    <div class="wrapper-special-tours">

                                        <?php foreach ($relats as $relat):?>

                                            <?php
                                            $mainImg = $relat->getImage();
                                            $gallery = $relat->getImages();
                                            ?>

                                        <div class="inner-special-tours">

                                            <a href="<?= Url::to(['product/view', 'id' => $relat->id]) ?>">
                                                <?php if ($relat->sale):?>
                                                    <span class="onsale">Sale!</span>
                                                <?php endif;?>
                                                <?= Html::img($mainImg->getUrl('430x305'), ['alt' => $relat->name, 'width' => '430', 'height' => '305'])?>
                                                </a>
                                            <div class="item_rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="post_title"><h3>
                                                    <a href="<?= Url::to(['product/view', 'id' => $relat->id]) ?>" rel="bookmark"><?= $relat->name?></a>
                                                </h3></div>
                                        <div class="item_price">
										    <span class="price"><del>$<?= $relat->price_old?></del>
										    <ins>$<?= $relat->price?></ins></span>

                                        </div>
                                        </div>

                                        <?php endforeach;?>

                                    </div>
                                </aside>
                            </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>