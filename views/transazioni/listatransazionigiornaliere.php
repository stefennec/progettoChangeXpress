<?php
use app\models\Transazioni;

//dove dentro  a post(x) va messo il nome dell'input field
$result=  Yii::$app->request->post('lista_transazioni_giornaliere');


 ?>


<body>
<!-- dati documento -->

<div class="containerdetail">
  <div class="header">
    <div class="intestazione">
      <h3 class="titolo">LISTA GIORNALIERA DELLE TRANSAZIONI</h3>


    </div>
    <div class="datiUfficio">
      <p>ChangeXpress & Global Service Srl</p>
      <p>Castello 4861 - 30122 Venezia</p>
      <p>Data: <strong><?php echo date("d/m/Y"); ?></strong> </p>
    </div>
  </div>




    <table class="tabledetail" style="page-break-inside:avoid" cellspacing="5" cellpadding="3">
      <tr class="headingRow1">
        <th>Ora</th>
        <th>Numero</th>
        <th>#</th>
        <th>Valuta</th>
        <th>Supporto</th>
        <th>Quantità</th>
        <th>Cambio</th>
        <th>Spese</th>
        <th>%</th>
        <th>Netto</th>
        <th>Commissioni</th>
        <th>Lordo</th>
        <th>Fidelity</th>
        <th>Cliente</th>
        <th>Operatore</th>
      </tr>

      <!-- inizio ciclo -->

      <?php

      $findTransazioni = Transazioni::find()
      // ->select('date(ora) as ora')
       // ->where(['=','ora',date('2018-08-25 22:27:39')])

       //funzionante ma manca il post e prende solo l'ora precisa.
       // ->where(['ora'=>'2018-08-25 22:27:39'])

       ->where(['like','ora',$result])

      // ->joinWith(['valute']) Yii::$app->request->post(
      ->all();





      $transazioni = $findTransazioni;

      // $sum = $valute->sum('controvalore'); ?>



      <?php foreach ($transazioni as $transazione) {
        // code...
        $formatter = \Yii::$app->formatter;

       ?>

       <tr>
         <td><?php echo $formatter->asTime($transazione->ora) ; ?></td>
         <td><?php echo $transazione->id; ?></td>
         <td>#</td>
         <td><?php echo $transazione->valuta; ?></td>
         <td><?php echo $transazione->supporto; ?></td>
         <td><?php echo $transazione->quantita; ?></td>
         <td><?php echo $transazione->cambio; ?></td>
         <td><?php echo $transazione->spese; ?></td>
         <td><?php echo $transazione->percentuale; ?></td>
         <td><?php echo $transazione->netto; ?></td>
         <td><?php echo $transazione->commissioni; ?></td>
         <td><?php echo $transazione->lordo; ?></td>
         <td><?php echo $transazione->fidelityCliente; ?></td>
         <td><?php echo $transazione->idCliente; ?></td>
         <td><?php echo $transazione->operatore; ?></td>

       </tr>
          <?php } ?>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><strong><?php echo Transazioni::find()->where(['like','ora',$result])->sum('spese'); ?>€</strong></td>
            <td></td>
            <td><strong><?php echo Transazioni::find()->where(['like','ora',$result])->sum('netto'); ?>€</strong></td>
            <td><strong><?php echo Transazioni::find()->where(['like','ora',$result])->sum('commissioni'); ?>€</strong></td>
            <td><strong><?php echo Transazioni::find()->where(['like','ora',$result])->sum('lordo'); ?>€</strong></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>



    </table>
    <div class="totaliTransazioni">

      <p>Totale Spesa Fissa:  </p>



    </div>
</div>
</body>
