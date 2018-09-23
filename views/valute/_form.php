<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Valute */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="valute-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isoCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RateUfficialeAcquisto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RateUfficialeVendita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'differenzialeAcquisto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'differenzialeVendita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'checkValuta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imgBandiera')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
