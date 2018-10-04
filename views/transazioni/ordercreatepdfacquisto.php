<?php
use app\models\Valute;

$id=$model->id;
$ora=$model->ora;
$valuta=$model->valuta;
$supporto=$model->supporto;
$quantita=$model->quantita;
$cambio=$model->cambio;
$netto=$model->netto;
$numeroCliente=$model->idCliente;

$entireValuta=Valute::find()
  ->where(['id'=>$valuta])->one();

$nomeValuta=$entireValuta->isoCode;
?>

<body>
<!-- dati documento -->
<div class="containerdetail">
    <table class="tabledetail" style="page-break-inside:avoid">
      <tbody>
          <tr>
            <td><h1>Change express</h1></td>
          </tr>
          <tr>
            <td><h3>Best and fast Change</h3></td>
          </tr>
          <tr>
            <td>Rialto SanMarco-5035</td>
          </tr>
          <tr>
            <td>p.iva 02272240488</td>
          </tr>
          <tr>
            <td>customercare@bestandfastchange.it</td>
          </tr>
          <tr>
            <!-- manca la data -->
            <td> <?php echo $ora.'      1CASSA'; ?></td>
          </tr>
          <tr>
            <td>In:  <?php echo $nomeValuta.' '.$quantita; ?> </td>
          </tr>
          <tr>
            <td>The service was provided according the italian law and to the conditions exposed in the office on the monitor price list and legal notice.</td>
          </tr>
          <tr>
            <td>The client, whose data are below, declares under her/his own responsability to be the actual customer. He declares not to be politically exposed and not to have close ties with politically exposed people. He/She declared also that it does not engage in money laundering or terrorist financing.</td>
          </tr>
          <tr>
            <td>Out: <?php echo 'EURO: '.$netto; ?> </td>
          </tr>
      </tbody>
    </table>
</div>

<pagebreak />

<div class="containerRicevuta2">
  <div class="intestazione">
    <div class="logoRicevuta">
      <img src="/img/ricevuta_logo.png" width="100%" height="60%" alt="">
    </div>
    <div class="dati">
      <p class="indirizzo">Castello 4861 - 30122 Venezia</p>
      <p class="iva">P.IVA: 04483570273</p>
      <p>changexpressvenezia@gmail.com </p>
      <p class="dataTrx"><?php echo $ora; ?></p>
      <p class="cliente"><strong>N° Cliente: <?php echo $numeroCliente ?> / N°TRX: <?php echo $id ?></strong></p>
    </div>
  </div>

  <div class="operazione">
    <div class="valori">
      <p>In: <strong><?php echo $nomeValuta.' '.$quantita; ?></strong> </p>
      <p>Out: <strong> <?php echo 'EURO: '.$netto; ?> </strong></p>
    </div>
    <div class="firma">
      <hr>
    </div>
  </div>

  <div class="informativa">
    <p><small>The service was provided according the italian law and to the conditions exposed in the office on the monitor price list and legal notice.</small></p>
  </div>
</div>
