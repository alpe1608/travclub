<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php //echo $form->field($model, 'parent_id')->textInput() ?>

    <?php //echo $form->field($model, 'parent_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(), 'id', 'name'))?>

    <div class="form-group field-category-parent_id has-success">
        <label class="control-label" for="category-parent_id">მშობელი კატეგორია</label>
        <select id="category-parent_id" class="form-control" name="Category[parent_id]">
            <option value="0">დამოუკიდებელი კატეგორია</option>
            <?= \app\components\MenuWidget::widget(['tpl' => 'select', 'model' => $model])?>
        </select>
    </div>

    <?php //echo $form->field($model, 'index_id')->textInput() ?>

    <?php echo $form->field($model, 'service_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'reg')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'image')->fileInput() ?>
    <?php //echo $form->field($model, 'gallery[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'hide')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
