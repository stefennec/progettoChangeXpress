<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ammanchi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ammanchi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'quantitaAmmanco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valutaAmmanco')->textInput() ?>

    <?= $form->field($model, 'operatore')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
