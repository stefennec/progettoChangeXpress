<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ValuteSupporto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="valute-supporto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'valuta')->textInput() ?>

    <?= $form->field($model, 'supporto')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
