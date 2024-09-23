<?php

use app\commands\Filter;
use app\commands\Helpers;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\pages\Pages $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pages-form bg-white rounded p-3 shadow-sm">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'type')->widget(
        Select2::classname(), 
        Filter::select(Helpers::filterType())
    ); ?>

    <div class="form-group mt-3">
        <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-sm btn-light py-2 px-4']) ?>
        <?= Html::submitButton('Submit', ['class' => 'btn btn-sm btn-dark py-2 px-4']) ?>
    </div>
    
    <?php ActiveForm::end(); ?>

</div>
