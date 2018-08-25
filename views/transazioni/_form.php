<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Valute;


/* @var $this yii\web\View */
/* @var $model app\models\Transazioni */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transazioni-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'ora')->textInput() ?> -->

    <?= $form->field($model, 'valuta')
            ->label(false)
            ->dropdownList(Valute::find()
                            ->select(['isoCode', 'id'])
                            ->indexBy('id')
                            ->column(),
                          ['prompt'=>'Seleziona Valuta']);
   ?>

    <?= $form->field($model, 'supporto')->textInput() ?>

    <?= $form->field($model, 'quantita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cambio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spese')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'percentuale')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'netto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'commissioni')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lordo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipologiaNazioneCliente')->textInput() ?>

    <?= $form->field($model, 'idCliente')->textInput() ?>

    <?= $form->field($model, 'operatore')->textInput() ?>

    <?= $form->field($model, 'fidelityCliente')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
