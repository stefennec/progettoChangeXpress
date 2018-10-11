<table class="tabledetail" id="tableAcquisti" style="page-break-inside:avoid" cellspacing="5" cellpadding="3">
    <tr>
      <th>Valuta</th>
      <th>Quantita</th>
      <th>Controvalore EURO</th>
    </tr>

    <?php

    $findTransazioni = Transazioni::find()
                         ->where(['like','ora',$result])
                         ->joinWith(['valute']);
                         //->all();

    $sql = $findTransazioni->createCommand()->getRawSql();
    echo $sql;

     // exit;

    $findTransazioni = $findTransazioni->all();

    $transazioni = $findTransazioni;
     ?>

     <?php $sommaQuantita = 0;
           $sommaControvalori = 0;
           $sum=0;
           $rigaTmp = null;

// INIZIO FOREACH

   foreach ($transazioni as $transazione) {
       // $formatter = \Yii::$app->formatter;
       $rigaTmp = $transazione;
       $quantitaValuta=Transazioni::find()
                          ->where(['valuta'=>$transazione->valuta])
                          ->andWhere(['like','ora',$result])
                          ->sum('quantita');
       $stampaSomma = $quantitaValuta;
       $checkValuta = Valute::find()
                        ->select('checkValuta')
                        ->where(['id'=>$transazione->valuta]);
// exit
      ?>
    <tr>
      <td><?php  echo $rigaTmp->valute->isoCode;?></td>
      <td><?php echo $quantitaValuta; ?></td>
      <td></td>
    </tr>
  <?php } ?>
    <tr>
      <td></td>
      <td> <strong><?php echo $sommaQuantita ?></strong> </td>
      <td><strong>€ <?php echo $sommaControvalori ?></strong> </td>
    </tr>
  </table>
