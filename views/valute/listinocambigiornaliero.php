<?php

use app\models\Valute;



 ?>


<body>
<!-- dati documento -->

<div class="containerdetail">
  <div class="intestazione">
    <div class="datiAzienda">
      <h3>ChangeXpress & Global Service Srl</h3>
      <!-- <img src="img/logo.jpg" alt=""> -->
      <h4>Castello 4861 - 30122 Venezia</h4>
      <h5>Partita IVA: 04483570273</h5>
      <p>changexpressvenezia@gmail.com </p>
    </div>

    <div class="aggiornamento">
      <p>Listino Cambio aggiornato: <strong><?php echo date("d/m/Y H:i"); ?></strong></p>
      <p>Rate List - last update: <strong><?php echo date("d/m/Y H:i A"); ?></strong> </p>
    </div>
  </div>


    <table class="tabledetail" style="page-break-inside:avoid" cellspacing="5" cellpadding="3">
      <tr class="headingRow1">
        <th>Codice Valuta</th>
        <th>Valuta</th>
        <th>Rate Acquisto</th>
        <th>Rate Vendita</th>
        <th>Differenziale Acquisto</th>
        <th>Differenziale Vendita</th>
      </tr>
      <tr class="headingRow2">
        <th>Currency Code</th>
        <th>Currency Name</th>
        <th>We Buy</th>
        <th>We Sell</th>
        <th>Spread Buying</th>
        <th>Spread Selling</th>
      </tr>
      <!-- inizio ciclo -->
      <?php

      $findValute = Valute::find()->where(['id'=>[2,5,9,10,12,13,14,16,18,19,20,52,33,34,38,44,45,51]])->all();
      $valute = $findValute;

      foreach ($valute as $valuta) {
        // code...

       ?>
      <tr>
        <td><?php echo $valuta->isoCode; ?></td>
        <td><?php echo $valuta->nome; ?></td>
        <td><?php echo $valuta->RateUfficialeAcquisto; ?></td>
        <td><?php echo $valuta->RateUfficialeVendita; ?></td>
        <td><?php echo $valuta->differenzialeAcquisto; ?></td>
        <td><?php echo $valuta->differenzialeVendita; ?></td>
      </tr>
  <?php } ?>
    </table>

    <h3 id="titoloCondizioni">Condizioni / Conditions:</h3>

    <div class="condizioni">
      <div class="condizioniTrue">
        <div class="condizioneA">
          <h4>A : Percentuale % - Percentage %</h4>
          <ol>
            <li>Aquisto / Buy => MAX 19.90 %</li>
            <li>Vendita / Sell => MAX 19.90 %</li>
            <li>Carte di Credito / Cash Advance => MAX 15.90 %</li>
          </ol>
        </div>
        <div class="condizioneB">
          <h4>B : Spesa Fissa - Fix Fee </h4>
          <ol>
            <li>=> MAX 7.90 €</li>
          </ol>
        </div>
        <div class="condizioneC">
          <h4>C : Differenziale - Rate</h4>
        </div>
        <p class="terms"><small>Per maggiori informazioni chiedere allo sportello / Ask inside for more informations<small></p>
      </div>
    </div>

</div>
</body>
