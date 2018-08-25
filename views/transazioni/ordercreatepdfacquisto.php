<?php
use app\models\Valute;


$id=$model->id;
$ora=$model->ora;
$valuta=$model->valuta;
$supporto=$model->supporto;
$quantita=$model->quantita;
$cambio=$model->cambio;
$netto=$model->netto;
// echo $id;
// echo $ora;
// echo $valuta;
// echo $supporto;
// echo $quantita;
// echo $cambio;

?>

<body>
  <?= $valuta;?>
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
            <td>Out:  EUR <?php $quantita; ?> </td>
          </tr>
          <tr>
            <td>The service was provided according the italian law and to the conditions exposed in the office on the monitor price list and legal notice.</td>
          </tr>
          <tr>
            <td>The client, whose data are below, declares under her/his own responsability to be the actual customer. He declares not to be politically exposed and not to have close ties with politically exposed people. He/She declared also that it does not engage in money laundering or terrorist financing.</td>
          </tr>
          <tr>
            <td>Out: <?php echo $valuta.' '.$netto; ?> </td>
          </tr>
      </tbody>
    </table>
</div>
