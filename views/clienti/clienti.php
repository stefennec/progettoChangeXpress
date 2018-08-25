<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Stati;
use app\models\Documenti;
use app\models\Enti;
use app\models\Comuni;
use app\models\Province;
// use yii\jui\DatePicker;
use kartik\widgets\DepDrop;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use kartik\widgets\DatePicker;


?>

<div class="container">
  <div class="row">
    <div class="col-md-12 mx-auto">
      <div class="card card-body text-center mt-5">
        <h1>Registrazione Cliente</h1>
        <div class="row">
          <div class="form">
            <?php $form = ActiveForm::begin(); ?>
            <div class="col-md-6">
              <div class="form-group">
                <?= $form->field($model, 'nomeCliente')
                ->textInput(['maxlength' => true])
                ->label('Nome Cliente:')
               ?>
              </div>
              <div class="form-group">
                <?= $form->field($model, 'cognomeCliente')
                ->textInput(['maxlength' => true])
                ->label('Cognome Cliente:')
               ?>
              </div>
              <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <?= $form->field($model, 'sesso')
                  ->label('Sesso:')
                  ->radioList([1=>'M', 2=>'F'])
                 ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <?= $form->field($model, 'residenteItalia')
                  ->label('Residente Italia:')
                  ->radioList([1=>'SI', 2=>'NO'])
                 ?>
                </div>
              </div>
            </div>

              <div class="form-group">
                  <?= $form->field($model, 'nazionalita')
                          ->label('Nazione di Residenza')
                          ->dropdownList(Stati::getStati(),
                                        ['prompt'=>'Seleziona Stato', 'id_stati' => 'cat-id']);
                 ?>
              </div>

              <div class="form-group">
                <?= $form->field($model, 'tipoDocumento')
                        ->label('Tipologia Documento')
                        ->dropdownList(Documenti::find()
                                        ->select(['nome', 'id'])
                                        ->indexBy('id')
                                        ->column(),
                                      ['prompt'=>'Seleziona Documento Valido']);
               ?>
              </div>
              <div class="form-group">
                <label for="">Data di Scadenza Documento:</label>
                <?=
              //   $form->field($model, 'scadenzaDoc')
              //   ->label('Scadenza Documento:')
              //   ->widget(\yii\jui\DatePicker::class, [
              //     //'language' => 'ru',
              //     'dateFormat' => 'dd-MM-yyyy',
              // ])


               DatePicker::widget([
                  'model' => $model,
                  'attribute' => 'scadenzaDoc',
                  'options' => ['placeholder' => 'Inserire data scadenza documento ...'],
                  'pluginOptions' => [
                      'autoclose'=>true,
                      'format' => 'dd/mm/yyyy'
                  ]
              ]);

              ?>
              </div>
              <div class="form-group">
                <?= $form->field($model, 'numeroDocumento')
                ->textInput(['maxlength' => true])
                ->label('Numero Documento:')
               ?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="">Data di Nascita:</label>
                <?=
              //   $form->field($model, 'dataNascita')
              //   ->label('Data di Nascita:')
              //   ->widget(\yii\jui\DatePicker::class, [
              //     //'language' => 'ru',
              //     'dateFormat' => 'dd-MM-yyyy',
              // ])
              DatePicker::widget([
                 'model' => $model,
                 'attribute' => 'dataNascita',
                 'options' => ['placeholder' => 'Inserire data di Nascita ...'],
                 'pluginOptions' => [
                     'autoclose'=>true,
                     'format' => 'dd/mm/yyyy'
                 ]
             ]);
              ?>
              </div>
              <div class="form-group">
                  <?= $form->field($model, 'luogoNascita')
                  ->textInput(['maxlength' => true])
                  ->label('Luogo di Nascita:')
                 ?>
              </div>
              <div class="form-group">
                  <?= $form->field($model, 'provincia')
                          ->label('Provincia di Nascita:')
                          ->dropdownList(Province::find()
                                          ->select(['sigla_province', 'id_province'])
                                          ->indexBy('id_province')
                                          ->column(),
                                        ['prompt'=>'Seleziona Provincia']);
                 ?>
              </div>
              <div class="form-group">
                <?= $form->field($model, 'codFiscale')
                ->textInput(['maxlength' => true])
                ->label('Codice Fiscale:')
               ?>
              </div>
              <div class="form-group">
                  <?= $form->field($model, 'ente')
                          ->label('Ente documento')
                          ->dropdownList(Enti::find()
                                          ->select(['nome', 'id'])
                                          ->indexBy('id')
                                          ->column(),
                                        ['prompt'=>'Seleziona un Ente riconosciuto']);
                 ?>
              </div>
              <div class="form-group">
                <?= $form->field($model, 'luogoEmissione')
                        ->label('Comune Emissione:')
                        ->dropdownList(Comuni::find()
                                        ->select(['comune', 'id'])
                                        ->indexBy('id')
                                        ->column(),
                                      ['prompt'=>'Seleziona Comune']);
               ?>
              </div>
              <div class="form-group">
                <?= $form->field($model, 'fidelity')
                ->textInput(['maxlength' => true])
                ->label('Fidelity Card:')
               ?>
              </div>
            </div>
            <div class="form-group">
              <?= Html::submitButton('Registra', ['class' => 'btn btn-success btn-block']) ?>
            </div>
            <div class="form-group">
              <input type="submit" value="Annulla" class="btn btn-danger btn-block">
            </div>
            <?php ActiveForm::end(); ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
