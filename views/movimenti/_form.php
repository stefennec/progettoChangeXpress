<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Movimenti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movimenti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'provenienza')->textInput() ?>

    <?= $form->field($model, 'destinazione')->textInput() ?>

    <?= $form->field($model, 'valuta')->textInput() ?>

    <?= $form->field($model, 'quantitaValuta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataMovimento')->textInput() ?>

    <?= $form->field($model, 'operatore')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
