<?php
use app\models\Transazioni;

//dove dentro  a post(x) va messo il nome dell'input field
$result=  Yii::$app->request->post('prima_nota');


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
            <td>€ <?php echo $fissaValute = Transazioni::find()->where(['like','ora',$result])->where(['valuta'=>[2,5,9,10,12,13,14,16,18,19,20,52,33,34,38,44,45,51]])->sum('spese') ?></td>
            <td>€ <?php echo $commissioniValute = Transazioni::find()->where(['like','ora',$result])->where(['valuta'=>[2,5,9,10,12,13,14,16,18,19,20,52,33,34,38,44,45,51]])->sum('commissioni') ?></td>
          </tr>

          <tr>
            <td>classificazione C</td>
            <td>€ <?php echo $fissaMcv = Transazioni::find()->where(['like','ora',$result])->where(['valuta'=>54])->sum('spese') ?></td>
            <td>€ <?php echo $commissioneMcv = Transazioni::find()->where(['like','ora',$result])->where(['valuta'=>54])->sum('commissioni') ?></td>
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

  <table class="tabledetail" id="tableAcquisti" style="page-break-inside:avoid" cellspacing="5" cellpadding="3">
    <tr>
      <th>Valuta</th>
      <th>Quantita</th>
      <th>Controvalore EURO</th>
    </tr>

    <?php

    $findTransazioni = Transazioni::find()
    // ->select('date(ora) as ora')
     // ->where(['=','ora',date('2018-08-25 22:27:39')])

     //funzionante ma manca il post e prende solo l'ora precisa.
     // ->where(['ora'=>'2018-08-25 22:27:39'])

     ->where(['like','ora',$result])

    ->joinWith(['valute'])
    ->all();

    $transazioni = $findTransazioni;
     ?>

     <?php $sommaQuantita = 0;
           $sommaControvalori = 0;?>

     <?php foreach ($transazioni as $transazione) {
       $formatter = \Yii::$app->formatter;

      ?>

      <tr>
        <td><?php echo $transazione->valute->isoCode; ?></td>
        <td><?php echo $quantitaValuta = Transazioni::find()->where(['like','ora',$result])->where(['valuta'=>$transazione->valuta])->sum('quantita') ?></td>
        <td><?php echo $controvaloreValuta = $quantitaValuta / (Transazioni::find()->where(['like','ora',$result])->where(['valuta'=>$transazione->valuta])->sum('quantita')/Transazioni::find()->where(['like','ora',$result])->where(['valuta'=>$transazione->valuta])->sum('netto')) ?> </td>
        <?php $sommaQuantita +=$quantitaValuta; ?>
        <?php $sommaControvalori +=$controvaloreValuta; ?>

      </tr>



    <?php } ?>

    <tr>
      <td></td>
      <td> <strong><?php echo $sommaQuantita ?></strong> </td>
      <td><strong>€ <?php echo $sommaControvalori ?></strong> </td>
    </tr>







  </table>
</div>



</body>
