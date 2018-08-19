<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TransazioniClienti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transazioni-clienti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'transazione')->textInput() ?>

    <?= $form->field($model, 'cliente')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
