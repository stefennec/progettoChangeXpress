<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClientiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clienti-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nomeCliente') ?>

    <?= $form->field($model, 'cognomeCliente') ?>

    <?= $form->field($model, 'dataNascita') ?>

    <?= $form->field($model, 'nazionalita') ?>

    <?php // echo $form->field($model, 'luogoNascita') ?>

    <?php // echo $form->field($model, 'codFiscale') ?>

    <?php // echo $form->field($model, 'sesso') ?>

    <?php // echo $form->field($model, 'residenteItalia') ?>

    <?php // echo $form->field($model, 'numeroDocumento') ?>

    <?php // echo $form->field($model, 'tipoDocumento') ?>

    <?php // echo $form->field($model, 'ente') ?>

    <?php // echo $form->field($model, 'luogoEmissione') ?>

    <?php // echo $form->field($model, 'provincia') ?>

    <?php // echo $form->field($model, 'fidelity') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
