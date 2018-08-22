<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Stati */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stati-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome_stati')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sigla_numerica_stati')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sigla_iso_3166_1_alpha_3_stati')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sigla_iso_3166_1_alpha_2_stati')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
