<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TransazioniSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transazioni-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ora') ?>

    <?= $form->field($model, 'valuta') ?>

    <?= $form->field($model, 'supporto') ?>

    <?= $form->field($model, 'quantita') ?>

    <?php // echo $form->field($model, 'cambio') ?>

    <?php // echo $form->field($model, 'spese') ?>

    <?php // echo $form->field($model, 'percentuale') ?>

    <?php // echo $form->field($model, 'netto') ?>

    <?php // echo $form->field($model, 'commissioni') ?>

    <?php // echo $form->field($model, 'lordo') ?>

    <?php // echo $form->field($model, 'tipologiaNazioneCliente') ?>

    <?php // echo $form->field($model, 'idCliente') ?>

    <?php // echo $form->field($model, 'operatore') ?>

    <?php // echo $form->field($model, 'fidelityCliente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
