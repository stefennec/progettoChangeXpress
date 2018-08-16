<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CambiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cambi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'valuta') ?>

    <?= $form->field($model, 'descrizione') ?>

    <?= $form->field($model, 'rateUfficialeAcquisto') ?>

    <?= $form->field($model, 'rateUfficialeVendita') ?>

    <?php // echo $form->field($model, 'spreadAcquisto') ?>

    <?php // echo $form->field($model, 'spreadVendita') ?>

    <?php // echo $form->field($model, 'prezzoMedioAcquisto') ?>

    <?php // echo $form->field($model, 'prezzoMedioVendita') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
