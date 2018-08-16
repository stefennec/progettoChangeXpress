<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Valute;

/* @var $this yii\web\View */
/* @var $model app\models\Cambi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cambi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'valuta')
            ->label(false)
            ->dropdownList(Valute::find()
                            ->select(['isoCode', 'id'])
                            ->indexBy('id')
                            ->column(),
                          ['prompt'=>'Seleziona Valuta']);
   ?>

    <?= $form->field($model, 'descrizione')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rateUfficialeAcquisto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rateUfficialeVendita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spreadAcquisto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spreadVendita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prezzoMedioAcquisto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prezzoMedioVendita')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
