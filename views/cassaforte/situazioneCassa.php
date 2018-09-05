<?php

use app\models\Cassaforte;
use app\models\Valute;

 ?>


 <body>
 <!-- dati documento -->

 <div class="containerdetail">
   <div class="header">
     <div class="intestazione">
       <h3>Stampa Situazione Cassa</h3>
       <p>FORMOSA</p>

     </div>
     <div class="datiUfficio">
       <p>ChangeXpress & Global Service Srl</p>
       <p>Castello 4861 - 30122 Venezia</p>
       <p>Data: <strong><?php echo date("l jS \of F Y h:i:s A"); ?></strong> </p>
     </div>
   </div>

     <table class="tabledetail" style="page-break-inside:avoid" cellspacing="5" cellpadding="3">
       <tr class="headingRow1">
         <th>Operatore</th>
         <th>Valuta</th>
         <th>Quantità</th>
         <th>Controvalore</th>
         <th>Prz.medio</th>
         <th>Medio Euro</th>
         <th>Q.tà acquistata</th>
       </tr>
       <!-- inizio ciclo -->
       <?php

       $findValute = Cassaforte::find()

       // ->joinWith(['valute'])
       ->innerJoin('Valute', 'Cassaforte.idValuta = Valute.id')
       ->where(['idValuta'=>[2,5,9,10,12,13,14,16,18,19,20,52,33,34,38,44,45,51]])->all();

       $findIsoCode = Valute::find()
       ->where(['id'=>[2,5,9,10,12,13,14,16,18,19,20,52,33,34,38,44,45,51]])->all();

       $valute = $findValute; ?>

       <?php foreach ($valute as $valuta) {
         // code...

        ?>
       <tr>
         <td>Cassaforte</td>
         <td><?php echo $valuta->valuta; ?></td>
         <td><?php echo $valuta->quantita; ?></td>
         <td><?php echo $valuta->controvalore; ?></td>
         <td><?php echo $valuta->prezzoMedio; ?></td>
         <td></td>
         <td></td>
       </tr>
   <?php } ?>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>Totale controvalore <?php echo array_sum([$valuta->controvalore]); ?></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
     </table>
     <div class="condizioni">
       <p>Condizioni 1 </p>
       <p>Condizioni 2: </p>
     </div>
 </div>
 </body>
