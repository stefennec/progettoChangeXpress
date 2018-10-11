<?php
use app\models\Transazioni;
use app\models\Valute;


//dove dentro  a post(x) va messo il nome dell'input field
$result=  Yii::$app->request->post('prima_nota');

print_r($result);

 ?>

<body>

  <div class="containerdetail">
    <div class="header">
      <div class="intestazione">
        <h3 class="titolo">RIEPILOGO OPERAZIONI DEL GIORNO</h3>
        <p>Data: <strong><?php echo date($result); ?></strong> </p>

      </div>
      <div class="datiUfficio">
        <p>ChangeXpress & Global Service Srl</p>
        <p>Castello 4861 - 30122 Venezia</p>

      </div>
    </div>

    <!-- RIPARTIZIONE DELLE COMMISSIONI -->

    <div class="ripartizione">
      <p><small>Ripartizione delle commissioni</small> </p>

      <div class="table-ripartizione">
        <table class="tabledetail" style="page-break-inside:avoid" cellspacing="5" cellpadding="3">
          <tr>
            <th></th>
            <th>SPESA FISSA</th>
            <th>COMMISSIONI</th>
          </tr>

          <tr>
            <td>classificazione B</td>
            <td>€ <?php echo $fissaValute = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>[1,2]])->sum('spese') ?></td>
            <td>€ <?php echo $commissioniValute = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>[1,2]])->sum('commissioni') ?></td>
          </tr>


          <tr>
            <td>classificazione C</td>
            <td>€ <?php echo $fissaMcv = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>[3]])->sum('spese') ?></td>
            <td>€ <?php echo $commissioneMcv = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>[3]])->sum('commissioni') ?></td>
          </tr>

          <tr>
            <td></td>
            <td><strong>€ <?php echo $totaleFisse = $fissaValute + $fissaMcv  ?></strong> </td>
            <td> <strong>€ <?php echo $totaleCommissioni = $commissioniValute + $commissioneMcv  ?></strong></td>
          </tr>
        </table>

        <p>€ <?php echo $totaleFisse + $totaleCommissioni ?></p>
        <p class="legenda"><small>Legenda: B valute escluse area euro, C carte di credito, E valute area euro, D euc</small></p>
      </div>
    </div>

<!-- MOVIMENTO DI ACQUISTO VALUTE -->

<div class="ripartizione">
  <p> <small>Movimenti di acquisto valuta</small>  </p>

  <table>
    <tr>
      <th>Valuta</th>
      <th>Quantità</th>
      <th>Controvalore EURO</th>
    </tr>

    <?php
    // query per la primanota acquisti
    $findTransazioniAcquisti = Transazioni::find()
                         ->where(['like','ora',$result])
                         ->andWhere(['tipologiaTrx'=>1])
                         ->joinWith(['valute']);
                         //->all();

    $sql = $findTransazioniAcquisti->createCommand()->getRawSql();
    echo $sql;
    // exit;
    $findTransazioniAcquisti = $findTransazioniAcquisti->all();

    $transazioniAcquisti = $findTransazioniAcquisti;
     //inizio ciclo valute prima nota

     // SEGUE GRUPPO ARRAY DOVE CARICO LE VALUTE GIORNALIERE

     $nomeValuta = [];
     $sommaQuantitaValuta = [];
     // eventualmente gestire il controvalore con un altro array vuoto
     $rigaValuta = null;

     // INIZIO DEL FOREACH GRANDE

     foreach ($transazioniAcquisti as $transazioneAcquisto) {
       $valutaAcquisto = $transazioneAcquisto->valute->isoCode;
       $sommaAcquisto = Transazioni::find()
                          ->where(['valuta'=>$transazioneAcquisto->valuta])
                          ->andWhere(['like','ora',$result])
                          ->sum('quantita');

// IF PER VEDERE SE CI SONO DUPLICATI DEL NOME VALUTA

             if(!in_array($valutaAcquisto, $nomeValuta))
                 {?>
                   <tr>
                     <td><?php echo $valutaAcquisto;
                     array_push($nomeValuta,$valutaAcquisto); ?>
                   </td>

                 <?php }; ?>

         <!-- IF PER VEDERE SE CI SONO DUPLICATI DELLA SOMMA QUANTITA -->

          <?php if (!in_array($sommaAcquisto, $sommaQuantitaValuta)) {
            ?>
              <td><?php echo $sommaAcquisto;
              array_push($sommaQuantitaValuta,$sommaAcquisto); ?></td>
          <?php  } ?>

             <td></td>
           </tr>"




  <?php   }




      ?>

  </table>

</div>




</body>
