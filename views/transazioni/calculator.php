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
                 <li class="disabled"><a href="#step-1">
                     <h4 class="list-group-item-heading">Step 1</h4>
                     <p class="list-group-item-text">Inserire il documento</p>
                 </a></li>
                 <li class="active"><a href="#step-2">
                     <h4 class="list-group-item-heading">Step 2</h4>
                     <p class="list-group-item-text">Calcolare l'importo</p>
                 </a></li>
                 <li class="disabled"><a href="#step-3">
                     <h4 class="list-group-item-heading">Step 3</h4>
                     <p class="list-group-item-text">Salvare</p>
                 </a></li>
             </ul>
         </div>
 	</div>
<?php
 $form = ActiveForm::begin([
   'options' => [
                'id'=>'acquisto-form'
             ]
 ]);

 ?> 

 <?php echo
 $form->field($model, 'quantita')
          ->label('Quantita')
          ->textInput(['maxlength' => true,
                       'class' => 'form-control',
                       'placeholder'=>'Quantita Valuta',
                        'id' => 'quantita']) ?>

 <?= $form->field($model, 'valuta')
         ->label(false)
         ->dropdownList(Valute::find()
                         ->select(['concat(isoCode,\' \',RateUfficialeAcquisto), id'])
                         ->indexBy('id')
                         ->column(),
                       ['prompt'=>'Seleziona Valuta','class' => 'your_class', 'id' => 'activitySelector']);
 ?>
 <?php echo
   $form->field($model, 'cambio')
            ->label('Rate applicato')
            ->textInput(['maxlength' => true,
                         'class' => 'form-control',
                         'placeholder'=>'Rate Applicato',
                          'id' => 'rate']) ?>

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

    document.getElementById('rate').value=slug;
    console.log(slug);
    });
    }
    </script>

                 <!-- Netto al Cliente -->
<?= $form->field($model, 'commissioni')
        ->textInput(['maxlength' => true,
                     'class' => 'form-control',
                     'placeholder'=>'Commissione',
                      'id' => 'commissione']) ?>

 <?= $form->field($model, 'spese')
          ->label('Spese')
          ->textInput(['maxlength' => true,
                       'class' => 'form-control',
                       'placeholder'=>'Spesa Fissa',
                        'id' => 'spesa']) ?>

 <?= $form->field($model, 'tipologiaNazioneCliente')
         ->label('Area Cliente:')
         ->dropdownList(TipologiaNazioni::find()
                         ->select(['tipologia', 'id'])
                         ->indexBy('id')
                         ->column(),
                       ['prompt'=>'Seleziona Area Cliente']);
?>

<div class="form-group">
  <input type="button"  onclick="calculateResults()"  value="Calcola il cambio"  class="btn btn-success">
</div>


<!-- Netto al Cliente -->
<?= $form->field($model, 'netto')
         ->label('Results')
         ->textInput(['maxlength' => true,
                       // 'readonly' => true,
                       'id' => 'netto-transazione']) ?>

<?= $form->field($model, 'commissioni')
        ->label('Commissione in €')
        ->textInput(['maxlength' => true,
                      // 'readonly' => true,
                       'id' => 'commissione-transazione']) ?>

<?= $form->field($model, 'lordo')
        ->label('Lordo')
        ->textInput(['maxlength' => true,
                      // 'readonly' => true,
                    'id' => 'lordo-transazione']) ?>

<div class="form-group">
      <?= Html::a("Conferma la transazione", ['createandprintacquisto'], [
                  'class' => 'btn btn-success btn-lg btn-block',
                  'data' => [
                      'confirm' => 'Sei sicuro di confermare la transazione?',
                      'method' => 'post',
                  ],
              ]) ?>


    <?php ActiveForm::end(); ?>
