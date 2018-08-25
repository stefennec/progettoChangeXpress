<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Valute;
use app\models\TipologiaNazioni;


  $form = ActiveForm::begin(); ?>

<div class="container">
     <div class="row">
       <div class="col-md-6 mx-auto">
         <div class="card card-body text-center mt-5">
           <h1 class="heading display-5 pb-3">MCV - Cash Advance</h1>
           <form id="mcv-form">
             <div class="form-group">
               <div class="input-group">
<?php
$time=date_default_timezone_set('Europe/Rome');

$data=time();
$data=date('H:i:s', $data)

?>
              <!-- quantita -->
              <div class="input-group">
                    <?php
                    // echo
                    //   $form->field($model, 'ora')
                    //             ->label('Ora')
                    //             ->textInput(['maxlength' => true,
                    //                         'value' => $data,
                    //                         'placeholder'=>'Quantita Valuta',
                    //                           'id' => 'ora'])
                                               ?>
                 <!-- Netto al Cliente -->
                 <?php echo
                 $form->field($model, 'netto')
                          ->label('Spese')
                          ->textInput(['maxlength' => true,
                                       'class' => 'form-control',
                                       'placeholder'=>'Quantita Valuta',
                                        'id' => 'quantitaMcv']) ?>
               </div>

             </div>
                 <!-- <span class="input-group-addon">$</span> -->
                 <!-- <input type="number" class="form-control" id="quantita" placeholder="quantitaValuta"> -->
               </div>
             </div>

            <div class="transazioni-form">




            <?= $form->field($model, 'valuta')
                    ->label(false)
                    ->dropdownList(Valute::find()
                                    ->select(['isoCode', 'id','nome', 'RateUfficialeAcquisto'])->where(['id'=>54])
                                    ->select(['concat(isoCode,\' \',RateUfficialeAcquisto), id'])->where(['id'=>54])
                                    ->indexBy('id')
                                    ->column(),
                                  ['prompt'=>'Seleziona Valuta','class' => 'your_class', 'id' => 'activitySelector']);
            ?>
            <div class="form-group">
               <?php echo
                 $form->field($model, 'cambio')
                          ->label('Rate applicato')
                          ->textInput(['maxlength' => true,
                                       'class' => 'form-control',
                                       'placeholder'=>'Rate Applicato',
                                        'id' => 'rateMcv']) ?>
             </div>
            <div class="form-group">
            <?php echo
                 $form->field($model, 'percentuale')
                          ->label('Commissione Applicata')
                          ->textInput(['maxlength' => true,
                                       'class' => 'form-control',
                                       'placeholder'=>'Percentuale di commissione',
                                        'id' => 'commissioneMcv']) ?>
             </div>
              <script>





          // Variabli iniziali
          var selectorValuta = document.getElementById('activitySelector');

          // funzione che scatena gli eventi
          loadEventListeners();

          // function for loadAllEvent
          function loadEventListeners(){
            selectorValuta.addEventListener("change", function(m) {

            var entireValue = selectorValuta.options[selectorValuta.selectedIndex].innerHTML;

            var str = entireValue;
            var slug = str.split(' ').pop();
            // slug=parseFloat(slug).toFixed(10,5);


          document.getElementById('rateMcv').value=slug;
          console.log(slug);

          });
          }
        </script>
             <!-- dove sparare il valore della valuta -->



        <div class="form-group">
             <div class="input-group">
                 <!-- Netto al Cliente -->
                 <?= $form->field($model, 'valuta')
                          ->textInput(['maxlength' => true,
                                       'class' => 'form-control',
                                       'placeholder'=>'Valuta-Sarà only read',
                                        'id' => 'valutaCodice']) ?>

               </div>

             <div class="form-group">
             <div class="input-group">
                 <!-- Netto al Cliente -->
                 <?= $form->field($model, 'spese')
                          ->label('Spese')
                          ->textInput(['maxlength' => true,
                                       'class' => 'form-control',
                                       'placeholder'=>'Spesa Fissa',
                                        'id' => 'spesaMcv']) ?>

               </div>

             </div>
             <div class="form-group">
               <?= $form->field($model, 'tipologiaNazioneCliente')
                       ->label('Area Cliente:')
                       ->dropdownList(TipologiaNazioni::find()
                                       ->select(['tipologia', 'id'])
                                       ->indexBy('id')
                                       ->column(),
                                     ['prompt'=>'Seleziona Area Cliente']);
              ?>
             </div>
             <div class="form-group">
               <input type="submit" value="Calcola il cambio" class="btn btn-success">
             </div>
             <div class="form-group">
               <input type="button" value="Calcola il cambio" onclick="calculateResultsMcv()" class="btn btn-success">
             </div>
           </form>
           <!-- LOADER -->

           <!-- RESULTS -->

               <div class="input-group">
                 <!-- Netto al Cliente -->
                 <?= $form->field($model, 'netto')
                          ->label('Results')
                          ->textInput(['maxlength' => true,
                                        'id' => 'nettoTransazioneMcv']) ?>

               </div>

            <div class="input-group">
                 <!-- Commissioni -->
                 <?= $form->field($model, 'commissioni')
                          ->label('Commissione in €')
                          ->textInput(['maxlength' => true,
                                         'id' => 'commissioneTransazioneMcv']) ?>
               </div>

               <div class="input-group">
                 <!-- Lordo -->
                 <?= $form->field($model, 'lordo')
                          ->label('Lordo')
                          ->textInput(['maxlength' => true,
                                      'id' => 'lordoTransazioneMcv']) ?>
               </div>

               <!-- id cliente -->
               <?= $form->field($model, 'idCliente')
                          ->label('Il nome del cliente')
                          ->textInput(['maxlength' => true,
                                      'id' => '']) ?>
               </div>

               <!-- operatore -->
               <?= $form->field($model, 'operatore')
                          ->label('Il num operatore')
                          ->textInput(['maxlength' => true,
                                      'id' => '']) ?>
               </div>

               <!-- Cliente -->
               <?= $form->field($model, 'fidelityCliente')
                          ->label('/')
                          ->textInput(['maxlength' => true,
                                      'id' => '']) ?>
               </div>

             <div class="form-group">
                <?= Html::a('Salva & Stampa', ['create', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
           </div>
         </div>
       </div>
     </div>
   </div>
