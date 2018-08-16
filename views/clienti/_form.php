<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Documenti;
use app\models\Enti;
use app\models\Stati;
use app\models\Sesso;

/* @var $this yii\web\View */
/* @var $model app\models\Clienti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clienti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomeCliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cognomeCliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataNascita')->textInput() ?>

    <?= $form->field($model, 'nazionalita')
            ->label()
            ->dropdownList(Stati::find()
                            ->select(['nome_stati', 'id_stati'])
                            ->indexBy('id_stati')
                            ->column(),
                          ['prompt'=>'Seleziona Stato']);
   ?>

    <?= $form->field($model, 'luogoNascita')->textInput() ?>

    <?= $form->field($model, 'codFiscale')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sesso')
            ->label()
            ->dropdownList(Sesso::find()
                            ->select(['sesso', 'id'])
                            ->indexBy('id')
                            ->column(),
                          ['prompt'=>'Seleziona Sesso Cliente']);
   ?>

    <?= $form->field($model, 'residenteItalia')
            ->radioList(array(1=>'SI', 2=>'NO')); ?>

    <?= $form->field($model, 'numeroDocumento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipoDocumento')
            ->label()
            ->dropdownList(Documenti::find()
                            ->select(['nome', 'id'])
                            ->indexBy('id')
                            ->column(),
                          ['prompt'=>'Seleziona Documento']);
   ?>

    <?= $form->field($model, 'ente')
            ->label()
            ->dropdownList(Enti::find()
                            ->select(['nome', 'id'])
                            ->indexBy('id')
                            ->column(),
                          ['prompt'=>'Autorità Documento']);
   ?>

    <?= $form->field($model, 'luogoEmissione')->textInput() ?>

    <?= $form->field($model, 'scadenzaDoc')->textInput() ?>

    <?= $form->field($model, 'provincia')->textInput() ?>

    <?= $form->field($model, 'fidelity')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
