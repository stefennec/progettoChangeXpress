<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Valute;
use app\models\Supporti;
use app\models\TipologiaNazioni;
 ?>
<div class="row form-group">
        <div class="col-xs-12">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
              <li class="disabled"><a href="#step-3">
                  <h4 class="list-group-item-heading">Step 1</h4>
                  <p class="list-group-item-text">Inserire nome & cognome</p>
              </a></li>
              <li class="disabled"><a href="#step-2">
                  <h4 class="list-group-item-heading">Step 2</h4>
                  <p class="list-group-item-text">Scegliere cliente già registrato</p>
              </a></li>
              <li class="disabled"><a href="#step-2">
                  <h4 class="list-group-item-heading">Step 3</h4>
                  <p class="list-group-item-text">Scegliere se compare o vendere</p>
              </a></li>
                <li class="active"><a href="#step-4">
                    <h4 class="list-group-item-heading">Step 4</h4>
                    <p class="list-group-item-text">Calcolare l'importo da acquistare</p>
                </a></li>
                <li class="disabled"><a href="#step-5">
                    <h4 class="list-group-item-heading">Step 5</h4>
                    <p class="list-group-item-text">Stampare i pdf</p>
                </a></li>
            </ul>
        </div>
	</div>
  <div class="container">
       <div class="row">
         <div class="col-md-6 mx-auto">
           <div class="card card-body text-center mt-5">
              <h2>Calcolatrice Vendita</h2>
  <br/>

<?php

 $form = ActiveForm::begin([
   'options' => [
                'id'=>'vendita-form'
             ]
           ]);
 ?>
 <?php echo
 $form->field($model, 'quantita')
          ->label('Quantita di Valuta da Cambiare')
          ->textInput(['maxlength' => true,
                       'class' => 'form-control',
                       'placeholder'=>'Quantita Valuta',
                        'id' => 'quantitaVendita']) ?>

 <?= $form->field($model, 'valuta')
         ->label(false)
         ->dropdownList(Valute::find()
                         ->select(['concat(isoCode,\' \',RateUfficialeVendita), id'])
                         ->indexBy('id')
                         ->column(),
                       ['prompt'=>'Seleziona Valuta da Cambiare','class' => 'your_class', 'id' => 'activitySelector']);
 ?>
 <?php echo
   $form->field($model, 'cambio')
            ->label('Rate applicato')
            ->textInput(['maxlength' => true,
                         'class' => 'form-control',
                         'placeholder'=>'Rate Applicato',
                          'id' => 'rateVendita']) ?>

  <!-- qui inizia il js per prendersi i tassi di cambio in automatico -->
      <script>
    // Variabli iniziali
    var selectorValuta = document.getElementById('activitySelector');

    // funzione che scatena gli eventi
    loadEventListeners();

    // function for loadAllEvent
    function loadEventListeners(){
    selectorValuta.addEventListener("change", function(e) {

    var entireValue = selectorValuta.options[selectorValuta.selectedIndex].innerHTML;

    var str = entireValue;
    var slug = str.split(' ').pop();
    // slug=parseFloat(slug).toFixed(10,5);

        document.getElementById('rateVendita').value=slug;
        console.log(slug);
      });
    }
    </script>

                 <!-- Spese da attribuire al Cliente -->
<?= $form->field($model, 'percentuale')
        ->label('Inserire % COMMISSIONE')
        ->textInput(['maxlength' => true,
                     'class' => 'form-control',
                     'placeholder'=>'Commissione',
                      'id' => 'percentualeVendita']) ?>

 <?= $form->field($model, 'spese')
          ->label('Inserire SPESA FISSA')
          ->textInput(['maxlength' => true,
                       'class' => 'form-control',
                       'placeholder'=>'Spesa Fissa',
                        'id' => 'spesaVendita']) ?>

 <?= $form->field($model, 'tipologiaNazioneCliente')
         ->label('Area Cliente:')
         ->dropdownList(TipologiaNazioni::find()
                         ->select(['tipologia', 'id'])
                         ->indexBy('id')
                         ->column(),
                       ['prompt'=>'Seleziona Area Cliente']);
?>

<div class="form-group">
  <input type="button" onclick="calculateResultsVendita()"  value="Calcola il cambio"  class="btn btn-success">
</div>


<!-- Netto al Cliente -->
<?= $form->field($model, 'netto')
         ->label('Netto da Pagare al Cliente')
         ->textInput(['maxlength' => true,
                       // 'readonly' => true,
                       'id' => 'nettoVendita']) ?>

<?= $form->field($model, 'commissioni')
        ->label('Commissione in € pagate dal Cliente')
        ->textInput(['maxlength' => true,
                      // 'readonly' => true,
                       'id' => 'commissioneVendita']) ?>

<?= $form->field($model, 'lordo')
        ->label('Lordo')
        ->textInput(['maxlength' => true,
                      // 'readonly' => true,
                    'id' => 'lordoVendita']) ?>
<?php
if(isset($idClient)){
echo $form->field($model, 'idCliente')
          ->label('Id Cliente')
          ->textInput(['maxlength' => true,
                      'readonly' => true,
                      'value' => $idClient,
                    ]);
    }else{
      echo $form->field($model, 'idCliente')
              ->label('Id Cliente')
              ->textInput(['maxlength' => true,
                          'readonly' => false,
                          'value' => '',
                        ]);
    }
    ?>
<?= $form->field($model, 'tipologiaTrx')
        ->label('Tipologia transazione')
        ->textInput(['maxlength' => true,
                    'value' => '2',
                    'id' => 'tipolgiaTrans']) ?>

<div class="form-group">
      <?= Html::a("Conferma la transazione", ['createandprintacquisto'], [
                  'class' => 'btn btn-success btn-lg btn-block',
                  'data' => [
                      'confirm' => 'Sei sicuro di confermare la transazione?',
                      'method' => 'post',
                  ],
              ]) ?>

<?php ActiveForm::end(); ?>

          </div>
        </div>
      </div>
    </div>
