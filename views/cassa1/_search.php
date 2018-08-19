<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cassa1Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cassa1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idValuta') ?>

    <?= $form->field($model, 'valuta') ?>

    <?= $form->field($model, 'quantita') ?>

    <?= $form->field($model, 'controvalore') ?>

    <?= $form->field($model, 'prezzoMedio') ?>

    <?php // echo $form->field($model, 'medioEuro') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
