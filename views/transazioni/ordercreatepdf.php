<?php

$id=$model->id;
$ora=$model->ora;
$valuta=$model->valuta;
$supporto=$model->supporto;
$quantita=$model->quantita;
$cambio=$model->cambio;
$spese=$model->spese;
$percentuale=$model->percentuale;
$netto=$model->netto;
$commissioni=$model->commissioni;

         ?>
  <!-- primo blocco mittente/destinatario-->
<body>
  <div class="sender-recive">
    <div id="sender">
      <table id="name">
      <tr>
            <td>qui ci va il logo</td>
        <tr>
        <tr>
            <td>Cambio valuta </td>
        <tr>
        <tr>
            <td>Via Roma, 2 </td>
        <tr>
        <tr>
            <td>3100 Venezia (VE) </td>
        <tr>
      </table>
    </div>
      <div class="reciver">
          <table class="reciver" style="page-break-inside:avoid">
            <tr>
               <td class="spaceupreciver"></td>
            </tr>
            <tr>
                <td><?=$ora." ".$ora?></td>
            <tr>
            <tr>
                <td><?=$ora?></td>
            <tr>
            <tr>
                <td><?=$ora." ".$ora." (".$ora.")"?></td>
            <tr>
          </table>
      </div>
    </div>
<!-- dati documento -->
<div class="containerdetail">
    <table class="tabledetail" style="page-break-inside:avoid">
      <tbody>
        <tr>
          <td colspan="2">Documento tipo:<br/> Fattura</td>
          <td colspan="2">CAUSALE DOCUMENTO:<br/> Fattura cliente</td>
          <td colspan="2">Agente:</td>
        </tr>
        <tr>
          <td>Numero:<br/><?php echo $ora;?></td>
          <td >Data:<br/> 26/05/2018</td>
          <td >Codice referente:<br/> 100000024</td>
          <td >Partita Iva:<br/> 01000000000000</td>
          <td >Codice Fiscale:<br/> 01000010000</td>
          <td >Pagina N°: 1/1</td>
        </tr>
        <tr>
        <td colspan="2">Numero:<br/> 12</td>
          <td colspan="4">Data:<br/> 26/05/2018</td>
        </tr>
      </tbody>
    </table>
</div>

<!-- Tabella prodotti da inserire poi con un loop -->
<div id="containerProduct">
    <table id="tableProduct" style="page-break-inside:avoid"><!-- forza la tabella in un'unica pagina-->
      <thead>
        <tr>
          <th>Codice</th>
          <th>Prodotto</th>
          <th>Prezzo</th>
          <th>#</th>
          <th>#</th>
        </tr>
      </thead>
      <tbody>
        
        <tr>
          <td><?=$ora?></td>
          <td><?=$quantita?></td>
          <td><?=$quantita?> €</td>
          <td>#</td>
          <td>#</td>
        </tr>
      <?php
  
      ?>
        <tr>
          <td style="height:4.6cm;"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th colspan="2" style="border: solid 1px #000;">Il tuo totale è di: 1.100€</th>
        </tr>
      </tbody>
    </table>
  </div>
  
<!-- tabella dettagli ordine -->
<div class="containerrecap">
    <table class="tabledetail" style="page-break-inside:avoid">
          <tbody>
            <tr>
              <td colspan="1" rowspan="2">Tipo di documento:<br/> Fattura</td>
              <td colspan="3">Dettagli documento:<br/> Fattura cliente</td>
              <td colspan="2">Agente:</td>
            </tr>
            <tr>
              <td colspan="1">Numero:<br/><?=$quantita?></td>
              <td colspan="1">Data:<br/> 26/05/2018</td>
              <td colspan="1">Codice:<br/> 4343</td>
              <td colspan="1">Partita Iva:<br/> 43</td>
              <td colspan="1">Codice Fiscale:<br/> 01000010000</td>
            </tr>
            <tr>
            <td colspan="2">Numero:<br/> 12</td>
              <td colspan="4">Data:<br/> 26/05/2018</td>
            </tr>
          </tbody>
    </table>
</div>
<p>Veganis, via venezia 180, 35138, Vicenza, Vi</p>
</body>
