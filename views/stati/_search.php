<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StatiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stati-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_stati') ?>

    <?= $form->field($model, 'nome_stati') ?>

    <?= $form->field($model, 'sigla_numerica_stati') ?>

    <?= $form->field($model, 'sigla_iso_3166_1_alpha_3_stati') ?>

    <?= $form->field($model, 'sigla_iso_3166_1_alpha_2_stati') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
