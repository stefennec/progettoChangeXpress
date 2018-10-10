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
      <p>Data: <strong><?php echo date($result); ?></strong> </p>

    </div>
    <div class="datiUfficio">
      <p>ChangeXpress & Global Service Srl</p>
      <p>Castello 4861 - 30122 Venezia</p>

    </div>
  </div>




    <table class="tabledetail" style="page-break-inside:" cellspacing="5" cellpadding="3">
      <tr class="headingRow1">
        <th>Ora</th>
        <th>Numero</th>
        <th>#</th>
        <th>Valuta</th>
        <th>Buy/Sell/Mcv</th>
        <th>Quantità</th>
        <th>Cambio</th>
        <th>Spese</th>
        <th>%</th>
        <th>Netto</th>
        <th>Commissioni</th>
        <th>Lordo</th>
        <th>Fidelity</th>
        <th>Cliente</th>
      </tr>

      <!-- inizio ciclo -->

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
      $i=0;

      // $sum = $valute->sum('controvalore'); ?>



      <?php foreach ($transazioni as $transazione) {
        $i++;
        $formatter = \Yii::$app->formatter;


       ?>

       <tr>
         <td><?php echo $formatter->asTime($transazione->ora) ; ?></td>
         <td><?php echo $transazione->id; ?></td>
         <td><?php echo $i; ?></td>
         <!-- per visualizzare il nome della valuta al posto del numero each dell loop deve richiamare il model a cui transazioni è relazionato e poi questo deve richiamare il valore che si desidera -->
         <td><?php echo $transazione->valute->isoCode; ?></td>
         <td><?php echo $transazione->tipologiaTrx; ?></td>
         <td><?php echo $transazione->quantita; ?></td>
         <td><?php echo $transazione->cambio; ?></td>
         <td><?php echo $transazione->spese; ?></td>
         <td><?php echo $transazione->percentuale; ?></td>
         <td><?php echo $transazione->netto; ?></td>
         <td><?php echo $transazione->commissioni; ?></td>
         <td><?php echo $transazione->lordo; ?></td>
         <td><?php echo $transazione->fidelityCliente; ?></td>
         <td><?php echo $transazione->idCliente; ?></td>


         <td><?php //echo "controvalore basato su prezzo medio alla data x".$transazione->quantita*$somma = Transazioni::find()->where(['like','ora',$result])->where(['valuta'=>3])->sum('netto')/Transazioni::find()->where(['like','ora',$result])->where(['valuta'=>$transazione->valuta])->sum('quantita'); ?></td>

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

<pagebreak />

<div class="header">
  <div class="intestazione">
    <h3 class="titolo">LISTA GIORNALIERA DELLE TRANSAZIONI</h3>
    <p>Data: <strong><?php echo date($result); ?></strong> </p>

  </div>
  <div class="datiUfficio">
    <p>ChangeXpress & Global Service Srl</p>
    <p>Castello 4861 - 30122 Venezia</p>

  </div>
</div>

    <!-- PARZIALE ACQUISTI -->
    <div class="totaliTransazioni">
      <h4 class="headingMcv">Acquisti</h4>
      <?php
      if (Transazioni::find()->where(['like','ora',$result])->where(['tipologiaTrx'=>1])) {
        $countAcquisti = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>1])->count();
        $sumCommissioniAcquisti = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>1])->sum('commissioni');
        $sumSpeseAcquisti = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>1])->sum('spese');
        $sumNettoAquisti = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>1])->sum('netto');
        $sumLordoAquisti = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>1])->sum('lordo');
      }
       ?>
       <table class="tabelleParziali">
         <tr>
           <th>Tot. Acquisti</th>
           <th>Tot. S.Fissa</th>
           <th>Tot. Commissioni</th>
           <th>Tot. Netto</th>
           <th>Tot. Lordo</th>
         </tr>
         <tr>
           <td><strong><?php echo $countAcquisti ?></strong></td>
           <td><strong>€ <?php echo $sumSpeseAcquisti ?></strong></td>
           <td><strong>€ <?php echo $sumCommissioniAcquisti ?></strong></td>
           <td><strong>€ <?php echo $sumNettoAquisti ?></strong></td>
           <td><strong>€ <?php echo $sumLordoAquisti ?></strong></td>
         </tr>
       </table>
    </div>

<!-- PARZIALE VENDITE  -->

    <div class="totaliTransazioni">
      <h4 class="headingMcv">Vendite</h4>
      <?php
      if (Transazioni::find()->where(['like','ora',$result])->where(['tipologiaTrx'=>2])) {
        $countVendite = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>2])->count();
        $sumCommissioniVendite = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>2])->sum('commissioni');
        $sumSpeseVendite = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>2])->sum('spese');
        $sumNettoVendite = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>2])->sum('netto');
        $sumLordoVendite = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>2])->sum('lordo');
      } ?>

      <table class="tabelleParziali">
        <tr>
          <th>Tot. Vendite</th>
          <th>Tot. S.Fissa</th>
          <th>Tot. Commissioni</th>
          <th>Tot. Netto</th>
          <th>Tot. Lordo</th>
        </tr>
        <tr>
          <td><strong><?php echo $countVendite ?></strong></td>
          <td><strong>€ <?php echo $sumSpeseVendite ?></strong></td>
          <td><strong>€ <?php echo $sumCommissioniVendite ?></strong></td>
          <td><strong>€ <?php echo $sumNettoVendite ?></strong></td>
          <td><strong>€ <?php echo $sumLordoVendite ?></strong></td>
        </tr>
      </table>

    </div>

    <!--  -->
    <!--  -->
    <!--  -->

    <!-- PARZIALE MCV -->

    <div class="totaliTransazioni">
      <h4 class="headingMcv">Carte di Credito - Cash Advance</h4>
      <?php
      if (Transazioni::find()->where(['like','ora',$result])->where(['tipologiaTrx'=>3])) {
        $findMcv = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>3])->all();;
        $parzialeMcv = $findMcv;
        ?>

        <table class="tabelleParziali">
          <tr>
            <th>N° Trx</th>
            <th>Valuta</th>
            <th>Quantità</th>
            <th>S. Fissa</th>
            <th>Commissioni</th>
            <th>Lordo</th>
          </tr>

      <?php  foreach ($parzialeMcv as $transazioneMcv) {
          ?>


            <tr>
              <td><?php echo $transazioneMcv->id; ?></td>
              <td><?php echo $transazioneMcv->valute->isoCode; ?></td>
              <td>€ <?php echo $transazioneMcv->quantita; ?></td>
              <td>€ <?php echo $transazioneMcv->spese; ?></td>
              <td>€ <?php echo $transazioneMcv->commissioni; ?></td>
              <td>€ <?php echo $transazioneMcv->lordo; ?></td>
            </tr>
      <?php
              }
            } ?>

            <?php
            $sumQuantitaMcv = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>3])->sum('quantita');
            $sumSpeseMcv = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>3])->sum('spese');
            $sumCommssioniMcv = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>3])->sum('commissioni');
            $sumLordoMcv = Transazioni::find()->where(['like','ora',$result])->andWhere(['tipologiaTrx'=>3])->sum('lordo');?>


            <tr class="divisore">
              <td></td>
              <td></td>
              <td ><strong>€ <?php echo $sumQuantitaMcv ?></strong></td>
              <td ><strong>€ <?php echo $sumSpeseMcv ?></strong></td>
              <td ><strong>€ <?php echo $sumCommssioniMcv ?></strong></td>
              <td ><strong>€ <?php echo $sumLordoMcv ?></strong></td>
            </tr>
      </table>
    </div>
</div>



</body>
