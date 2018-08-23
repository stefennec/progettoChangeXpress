<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Valute;
use app\models\TipologiaNazioni;


?>

<div class="container">
     <div class="row">
       <div class="col-md-6 mx-auto">
         <div class="card card-body text-center mt-5">
           <h1 class="heading display-5 pb-3">Vendita Valute</h1>
           <form id="loan-form">
             <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon">€</span>
                 <input type="number" class="form-control" id="quantitaVendita" placeholder="quantita di EURO">
               </div>
             </div>

            <div class="transazioni-form">


            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'valuta')
                    ->label(false)
                    ->dropdownList(Valute::find()
                                    ->select(['isoCode', 'id','nome', 'RateUfficialeVendita'])
                                    ->select(['concat(isoCode,\' \',RateUfficialeVendita), id'])
                                    ->indexBy('id')
                                    ->column(),
                                  ['prompt'=>'Seleziona Valuta','class' => 'your_class', 'id' => 'activitySelector']);
            ?>
            <div class="form-group">
               <input type="text" class="form-control" id="rateVendita" placeholder="Rate Applicato">
             </div>
            <div class="form-group">
               <input type="text" class="form-control" id="commissioneVendita" placeholder="Commissione Applicata">
             </div>
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
             <!-- dove sparare il valore della valuta -->




             <div class="form-group">
               <input type="number" class="form-control" id="spesaVendita" placeholder="Spesa Fissa">
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
             <div class="forn-group">
               <input type="submit" value="Calcola il cambio" class="btn btn-success">
             </div>
           </form>
           <!-- LOADER -->

           <!-- RESULTS -->
           <div id="results" class="pt-4">
             <h5>Results</h5>
             <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon">Netto al Cliente</span>
                 <input type="number" class="form-control" id="netto-transazioneVendita" disabled>
               </div>
             </div>

             <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon">Commissione in €</span>
                 <input type="number" class="form-control" id="commissione-transazioneVendita" disabled>
               </div>
             </div>

             <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon">Lordo</span>
                 <input type="number" class="form-control" id="lordo-transazioneVendita" disabled>
               </div>
             </div>
             <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-danger btn-block']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
           </div>
         </div>
       </div>
     </div>
   </div>
