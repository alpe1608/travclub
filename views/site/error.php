<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use app\assets\CatAppAsset;


CatAppAsset::register($this);

$this->title = $name;
?>
<div class="site-error">

    <div class="section-white padding-top-6x padding-bottom-6x tours-type">
        <div class="container">
            <div class="shortcode_title title-center title-decoration-bottom-center">

                <h3 class="title_primary"><?= Html::encode($this->title) ?></h3>
            </div>
            <div class="wrapper-tours-slider wrapper-tours-type-slider">

                <div class="alert alert-danger">
                    <?= nl2br(Html::encode($message)) ?>
                </div>

                <p>
                    The above error occurred while the Web server was processing your request.
                </p>
                <p>
                    Please contact us if you think this is a server error. Thank you.
                </p>

            </div>
        </div>
    </div>
</div>
