<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cassaforte */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cassaforte-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idValuta')->textInput() ?>

    <?= $form->field($model, 'valuta')->textInput() ?>

    <?= $form->field($model, 'quantita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'controvalore')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prezzoMedio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'medioEuro')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
