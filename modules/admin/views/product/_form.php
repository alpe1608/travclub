<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php //echo  $form->field($model, 'category_id')->textInput() ?>

    <div class="form-group field-product-category_id has-success">
        <label class="control-label" for="product-category_id">მშობელი კატეგორია</label>
        <select id="product-category_id" class="form-control" name="Product[category_id]" aria-invalid="false">
            <?= \app\components\MenuWidget::widget(['tpl' => 'select_product', 'model' => $model])?>
        </select>
    </div>

    <?php //echo $form->field($model, 'my_index_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_old')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'annotation')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'day')->textInput() ?>

    <?= $form->field($model, 'night')->textInput() ?>

    <?php
    echo $form->field($model, 'about')->widget(CKEditor::className(), [
  'editorOptions' => ElFinder::ckeditorOptions('elfinder',[])
]);
    ?>

    <?php //echo $form->field($model, 'itinerary')->textarea(['rows' => 6]) ?>

    <?php
    echo $form->field($model, 'itinerary')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[])
    ]);
    ?>

    <?php //echo $form->field($model, 'data_lat')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'data_long')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'data_address')->textarea(['rows' => 6]) ?>

    <?php //echo $form->field($model, 'reviews')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>
    <?= $form->field($model, 'gallery[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'relat')->checkbox([ '0', '1', '2', '3', '4', ]) ?>

    <?= $form->field($model, 'hit')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'new')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'sale')->checkbox([ '0', '1', ]) ?>

    <?php //echo $form->field($model, 'ship')->checkbox([ '0', '1', ]) ?>

    <?php //echo $form->field($model, 'car')->checkbox([ '0', '1', ]) ?>

    <?php //echo $form->field($model, 'horse')->checkbox([ '0', '1', ]) ?>

    <?php //echo $form->field($model, 'walk')->checkbox([ '0', '1', ]) ?>

    <?php //echo $form->field($model, 'bike')->checkbox([ '0', '1', ]) ?>

    <?php //echo $form->field($model, 'hide')->checkbox([ '0', '1', ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
