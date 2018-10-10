<?php
use app\models\Valute;
use app\models\Clienti;

$id=$model->id;
$ora=$model->ora;
$valuta=$model->valuta;
$supporto=$model->supporto;
$quantita=$model->quantita;
$cambio=$model->cambio;
$netto=$model->netto;
$numeroCliente=$model->idCliente;
$tipologia=$model->tipologiaTrx;
$lordoTrx=$model->lordo;

$entireValuta=Valute::find()
  ->where(['id'=>$valuta])->one();

$nomeValuta=$entireValuta->isoCode;
?>

<body>
<!-- dati documento -->
<div class="containerRicevuta2">
  <div class="intestazione">
    <div class="logoRicevuta">
      <img src="/img/ricevuta_logo.png" width="100%" height="60%" alt="">
    </div>
    <div class="datiTransazione">
      <p id="invisibile" style="color:white">Testo invisibile</p>
      <?php
      if ($tipologia==2) {
        echo "<p>In: <strong>  EURO: ".$quantita."</strong></p>
              <p>Out: <strong>".$nomeValuta.' '.$netto."</strong> </p>";
      }
      if ($tipologia==3) {
        echo "<p>In: <strong>".$nomeValuta.' '.$lordoTrx."</strong> </p>
        <p>Out: EURO <strong>".$netto."</strong></p>";
      }
      if ($tipologia==1) {
        echo "<p>In: <strong>".$nomeValuta.' '.$quantita."</strong> </p>
        <p>Out: EURO <strong>".$netto."</strong></p>";
      }

        ?>
    </div>
  </div>

  <div class="datiUfficio">
    <div class="valori">
      <p class="indirizzo">Castello 4861 - 30122 Venezia</p>
      <p class="iva">P.IVA: 04483570273</p>
      <p>changexpressvenezia@gmail.com </p>
      <p class="dataTrx"><?php echo $ora; ?></p>
    </div>
    <div class="datiCliente">


      <p class="cliente"><strong></strong></p>
    </div>
<?php

// var_dump($nomeCliente);
// exit ?>
  </div>

  <div class="firma">
    <hr>
  </div>

  <div class="informativa">
    <p><small>The service was provided according the italian law and to the conditions exposed in the office on the monitor price list and legal notice.</small></p>
  </div>
</div>

<pagebreak />

<div class="containerRicevuta2">
  <div class="intestazione">
    <div class="logoRicevuta">
      <img src="/img/ricevuta_logo.png" width="100%" height="60%" alt="">
    </div>
    <div class="datiTransazione">
      <p id="invisibile" style="color:white">Testo invisibile</p>
      <?php
      if ($tipologia==2) {
        echo "<p>In: <strong>  EURO: ".$quantita."</strong></p>
              <p>Out: <strong>".$nomeValuta.' '.$netto."</strong> </p>";
      }
      if ($tipologia==3) {
        echo "<p>In: <strong>".$nomeValuta.' '.$lordoTrx."</strong> </p>
        <p>Out: EURO <strong>".$netto."</strong></p>";
      }
      if ($tipologia==1) {
        echo "<p>In: <strong>".$nomeValuta.' '.$quantita."</strong> </p>
        <p>Out: EURO <strong>".$netto."</strong></p>";
      }

        ?>
    </div>
  </div>

  <div class="datiUfficio">
    <div class="valori">
      <p class="indirizzo">Castello 4861 - 30122 Venezia</p>
      <p class="iva">P.IVA: 04483570273</p>
      <p>changexpressvenezia@gmail.com </p>
      <p class="dataTrx"><?php echo $ora; ?></p>
    </div>
    <div class="datiCliente">


      <p class="cliente"><strong>N° Cliente: <?php echo $numeroCliente ?> / N°TRX: <?php echo $id ?></strong></p>
    </div>
<?php

// var_dump($nomeCliente);
// exit ?>
  </div>

  <div class="firma">
    <hr>
  </div>

  <div class="informativa">
    <p><small>The service was provided according the italian law and to the conditions exposed in the office on the monitor price list and legal notice.</small></p>
  </div>
</div>


<!-- esempio -->
