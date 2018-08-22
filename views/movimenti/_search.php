<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MovimentiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movimenti-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'provenienza') ?>

    <?= $form->field($model, 'destinazione') ?>

    <?= $form->field($model, 'valuta') ?>

    <?= $form->field($model, 'quantitaValuta') ?>

    <?php // echo $form->field($model, 'dataMovimento') ?>

    <?php // echo $form->field($model, 'operatore') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
