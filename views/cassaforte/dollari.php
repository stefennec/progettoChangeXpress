<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\db\ActiveRecord;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\Cassaforte;
use yii\db\Query;
?>


<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <h1>Conteggio Dollari</h1>
        </div>
        <div class="panel-body text-center">
          <h2>Tagli USD</h2>

            <form class="text-center" id="dollariCalcolatore">

              <div class="row">
                <div class="col-lg-4">
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">100 $</span>
                      <input type="number" id="cento$" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">50 $</span>
                      <input type="number" id="cinquanta$" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">20 $</span>
                      <input type="number" id="venti$" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">10 $</span>
                      <input type="number" id="dieci$" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">5 $</span>
                      <input type="number" id="cinque$" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">2 $</span>
                      <input type="number" id="due$" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">1 $</span>
                      <input type="number" id="un$" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale100USD" class="form-control" readonly placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale50USD" class="form-control" readonly placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale20USD" class="form-control" readonly placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">

                      <input type="number" id="totale10USD" class="form-control" readonly placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale5USD" class="form-control" readonly placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale2USD" class="form-control" readonly placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale1USD" class="form-control" readonly placeholder="">
                  </div>
                  <br>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">Overlimit $</span>
                      <input type="number" id="totaleOverlimit" value="0" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">STOCK $</span>
                      <input type="number" id="totaleStock" value="0" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">

                     <?php

                     $query = Cassaforte::find()->where(['valuta'=>51])->one();

                    $risultatoQuery = $query;

                      // $sql = 'SELECT quantita FROM Cassaforte WHERE valuta=51';
                      // $quantitaUSD = Cassaforte::findBySql($sql);
                      // $results = $quantitaUSD;
                      // echo $results;
                      // var_dump($risultatoQuery);


                     ?>
                  </div>
                </div>
                <div class="input-group input-group-lg text-center">
                    <span class="input-group-addon">TOTALE CALCOLATO SUL MOMENTO $</span>
                    <input type="number" id="totaleCombinatoDollari" readonly class="form-control" placeholder="">
                    <span class="input-group-addon">TOTALE IN CASSAFORTE $</span>
                    <input type="number" id="totaleCombinatoDollari" value="<?php echo $risultatoQuery->quantita; ?>" readonly class="form-control" placeholder="">
                </div>
              </div>
              <div class="input-group input-group-lg text-center">
                  <input type="submit" name="" value="Calcola Totali" class="btn-danger">
              </div>

            </form>


        </div>
        <div class="panel-footer">

        </div>
      </div>
    </div>
  </div>
</div>
