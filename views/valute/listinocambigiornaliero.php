<?php

use app\models\Valute;



 ?>


<body>
<!-- dati documento -->

<div class="containerdetail">
  <h1>ChangeXpress & Global Service Srl</h1>
  <!-- <img src="img/logo.jpg" alt=""> -->
  <h2>Castello 4861 - 30122 Venezia</h2>
  <h3>Partita IVA: 04483570273</h3>
  <p>changexpressandglobalservice@gmail.com </p>
  <div class="aggiornamento">
    <p>Listino Cambio aggiornato alle: </p>
    <p>Rate List - last update: </p>
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
        <td></td>
        <td></td>
      </tr>
  <?php } ?>
    </table>
    <div class="condizioni">
      <p>Condizioni 1 </p>
      <p>Condizioni 2: </p>
    </div>
</div>
</body>
