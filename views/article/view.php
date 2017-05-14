<?php
use yii\helpers\Html;
use yii\db\ActiveRecord;
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
                    <li><a href="<?= Url::to(['blog/view', 'id' => $article->blog->id])?>"><?= $article->blog->name?></a></li>
                </ul>
            </div>
            <h1 class="heading_primary"><?= $article->blog_title?></h1></div>
    </div>
    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="site-main col-sm-9 alignleft">

                    <article class="post_list_content_unit type-post">
                        <div class="feature-image">
                            <?= Html::img("@web/images/blog/$article->img", ['alt' => '', 'width' => '1200', 'height' => '800'])?>

                        </div>
                        <div class="post-list-content">
                            <div class="post_list_inner_content_unit">
                                <h1 class="post_list_title"><?= $article->blog_title?></h1>
                                <div class="wrapper-meta">
                                    <div class="date-time"><?= $article->created_at?></div>
                                    <div class="post_list_cats">
                                        <a href="blog.html" rel="category tag"><?= $article->blog->name?></a>
                                    </div>
                                </div>
                                <div class="post_list_item_excerpt">

                                    <?= $article->content?>
                                </div>
                            </div>
                        </div>
                    </article>



                    <nav class="navigation post-navigation" role="navigation">
                        <h2 class="screen-reader-text">Post navigation</h2>
                        <div class="nav-links">
                            <div class="nav-previous">
                                <a href="#" rel="prev">The perfect summer body</a>
                            </div>
                            <div class="nav-next">
                                <a href="#" rel="next">World’s hottest destinations for vegans</a>
                            </div>
                        </div>
                    </nav>
                    <div id="comments" class="comments-area">
                        <h2 class="comments-title"> 2 thoughts on “<span>Love advice from experts</span>” </h2>
                        <div class="comment-list-inner">
                            <ol class="comment-list">
                                <li class="comment byuser comment-author-physcode bypostauthor even thread-even depth-1 description_comment">
                                    <div class="wrapper-comment">
                                        <div class="wrapper_avatar">
                                            <img alt="" src="/travclub/web/images/avata.jpeg" class="avatar avatar-90 photo" height="90" width="90">
                                        </div>
                                        <div class="comment-right">
                                            <div class="comment-extra-info">
                                                <div class="author">
                                                    <span class="author-name"><i class="fa fa-user"></i> physcode</span>
                                                </div>
                                                <div class="date">
                                                    <i class="fa fa-calendar"></i> September 6, 2016
                                                </div>
                                                <a class="comment-edit-link" href="#">Edit</a>
                                                <a rel="nofollow" class="comment-reply-link" href="single.html/#respond">Reply</a>
                                            </div>
                                            <div class="content-comment">
                                                <p>Vivamus nec mattis ipsum. Nam fringilla laoreet dolor. Aliquam lacus nisl, viverra ac convallis sit amet, fermentum vitae magna.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="comment byuser comment-author-physcode bypostauthor odd alt depth-2 description_comment">
                                            <div class="wrapper-comment">
                                                <div class="wrapper_avatar">
                                                    <img alt="" src="/travclub/web/images/avata.jpeg" class="avatar avatar-90 photo" height="90" width="90">
                                                </div>
                                                <div class="comment-right">
                                                    <div class="comment-extra-info">
                                                        <div class="author">
                                                            <span class="author-name"><i class="fa fa-user"></i> physcode</span>
                                                        </div>
                                                        <div class="date">
                                                            <i class="fa fa-calendar"></i> December 10, 2016
                                                        </div>
                                                        <a class="comment-edit-link" href="#">Edit</a>
                                                        <a rel="nofollow" class="comment-reply-link" href="single.html/#respond">Reply</a>
                                                    </div>
                                                    <div class="content-comment">
                                                        <p>Suspendisse eu nunc sit amet est fringilla lobortis bibendum iaculis ante. Proin varius, lorem ac lobortis dictum</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title">Leave a Reply </h3>
                            <form action="#" method="post" id="commentform" class="comment-form" novalidate="">
                                <p class="comment-notes">
                                    <span id="email-notes">Your email address will not be published.</span> Required fields are marked
                                    <span class="required">*</span></p>
                                <p class="comment-form-author"><label for="author">Name
                                        <span class="required">*</span></label>
                                    <input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required">
                                </p>
                                <p class="comment-form-email"><label for="email">Email
                                        <span class="required">*</span></label>
                                    <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required">
                                </p>
                                <p class="comment-form-url"><label for="url">Website</label>
                                    <input id="url" name="url" type="url" value="" size="30" maxlength="200"></p>
                                <p class="comment-form-comment"><label for="comment">Comment</label>
                                    <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                                </p>
                                <p class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
                                </p></form>
                        </div>
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