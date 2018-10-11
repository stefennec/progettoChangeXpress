<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Stati;
use app\models\Documenti;
use app\models\Clienti;
use app\models\Enti;
use app\models\Comuni;
use app\models\Province;
// use yii\jui\DatePicker;
use kartik\widgets\DepDrop;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use kartik\widgets\DatePicker;

// echo $nomeIntero;
?>
<!-- progress bar -->
<div class="row form-group">
        <div class="col-xs-12">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
              <li class="disabled"><a href="#step-3">
                  <h4 class="list-group-item-heading">Step 1</h4>
                  <p class="list-group-item-text">Inserire nome & cognome</p>
              </a></li>
              <li class="active"><a href="#step-2">
                  <h4 class="list-group-item-heading">Step 2</h4>
                  <p class="list-group-item-text">Inserire i dati del nuovo cliente</p>
              </a></li>
              <li class="disabled"><a href="#step-2">
                  <h4 class="list-group-item-heading">Step 3</h4>
                  <p class="list-group-item-text">Scegliere se comprare o vendere</p>
              </a></li>
                <li class="disabled"><a href="#step-4">
                    <h4 class="list-group-item-heading">Step 4</h4>
                    <p class="list-group-item-text">Calcolare l'importo</p>
                </a></li>
                <li class="disabled"><a href="#step-5">
                    <h4 class="list-group-item-heading">Step 5</h4>
                    <p class="list-group-item-text">Salvare</p>
                </a></li>
            </ul>
        </div>
	</div>

<div class="container">
  <div class="row">
    <div class="col-md-12 mx-auto">
      <div class="card card-body text-center mt-5">
        <h2>Registrazione Nuovo Cliente</h2>
        <br/>
        <div class="row">
          <div class="form">

            <?php $form = ActiveForm::begin(); ?>
            <div class="col-md-6">
              <div class="form-group">

      <!-- Name New cliente -->
                <?php echo $form->field($model, 'nomeCliente')
                ->textInput(['maxlength' => true, 'readonly' => false])
                ->label('Nome Cliente:')
               ?>
              </div>
  <!-- Cognome New cliente -->
              <div class="form-group">
                  <?= $form->field($model, 'cognomeCliente')
                  ->textInput(['maxlength' => true, 'readonly' => false])
                  ->label('Cognome Cliente:')
                 ?>
              </div>
              <div class="row">
              <div class="col-md-3">
                <div class="form-group">
    <!-- Sesso New cliente -->
                  <?= $form->field($model, 'sesso')
                  ->label('Sesso:')
                  ->radioList([1=>'M', 2=>'F'])
                 ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
      <!-- Residente in Italia Si/no -->
                  <?= $form->field($model, 'residenteItalia')
                  ->label('Residente Italia:')
                  ->radioList([1=>'SI', 2=>'NO'])
                 ?>
                </div>
              </div>
            </div>

              <div class="form-group">
      <!-- Nazionalita -->
                  <?= $form->field($model, 'nazionalita')
                          ->label('Nazione di Residenza:')
                          ->dropdownList(Stati::getStati(),
                                        ['prompt'=>'Seleziona Stato', 'id_stati' => 'cat-id']);
                 ?>
              </div>

              <div class="form-group">
      <!-- tipo di documento -->
                <?= $form->field($model, 'tipoDocumento')
                        ->label('Tipologia Documento:')
                        ->dropdownList(Documenti::find()
                                        ->select(['nome', 'id'])
                                        ->indexBy('id')
                                        ->column(),
                                      ['prompt'=>'Seleziona Documento Valido']);
               ?>
              </div>
              <div class="form-group">
        <!-- Data di scadenza documento -->

                <?=
              //   $form->field($model, 'scadenzaDoc')
              //   ->label('Scadenza Documento:')
              //   ->widget(\yii\jui\DatePicker::class, [
              //     //'language' => 'ru',
              //     'dateFormat' => 'dd-MM-yyyy',
              // ])


               $form->field($model, 'scadenzaDoc')->widget(DatePicker::classname(), [
                  'options' => ['placeholder' => 'scadenza documento ...'],
                  'pluginOptions' => [
                      'autoclose'=>true,
                      'format' => 'yyyy-mm-dd'
                  ]
              ]);

              ?>
              </div>
              <div class="form-group">
      <!-- Numero documento -->
                <?= $form->field($model, 'numeroDocumento')
                ->textInput(['maxlength' => true])
                ->label('Numero Documento:')
               ?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="">Data di Nascita:</label>
      <!-- Data di nascita -->
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
                     'format' => 'yyyy-mm-dd'
                 ]
             ]);
              ?>
              </div>
              <div class="form-group">
        <!-- Luogo di nascita -->
                  <?= $form->field($model, 'luogoNascita')
                  ->textInput(['maxlength' => true])
                  ->label('Luogo di Nascita:')
                 ?>
              </div>
              <div class="form-group">
      <!-- Provincia di nascita -->
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
      <!-- Codice fiscale -->
                <?= $form->field($model, 'codFiscale')
                ->textInput(['maxlength' => true])
                ->label('Codice Fiscale:')
               ?>
              </div>
              <div class="form-group">
      <!-- Ente -->
                  <?= $form->field($model, 'ente')
                          ->label('Ente documento:')
                          ->dropdownList(Enti::find()
                                          ->select(['nome', 'id'])
                                          ->indexBy('id')
                                          ->column(),
                                        ['prompt'=>'Seleziona un Ente riconosciuto']);
                 ?>
              </div>
              <div class="form-group">
        <!-- Luogo di emissione -->
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
      <!-- Fidelity card -->
                <?= $form->field($model, 'fidelity')
                ->textInput(['maxlength' => true])
                ->label('Fidelity Card:');
                ?>
              </div>
            </div>
            <div class="form-group">
              <?= Html::a("Registra e vai alla calcolatrice", ['transazioni/choosecalculator'], [
                  'class' => 'btn btn-success btn-lg',
                  'data' => [
                      'method' => 'post',
                  ],
              ]) ?>
            </div>
            <div class="form-group">
              <input type="submit" value="Annulla" class="btn btn-danger">
            </div>
            <?php ActiveForm::end(); ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
