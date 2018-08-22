<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
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
          <h1>Conteggio Euro</h1>
        </div>
        <div class="panel-body text-center">
          <h2>Tagli EURO</h2>

            <form class="text-center">

              <div class="row">
                <div class="col-lg-6">
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">500 €</span>
                      <input type="number" id="cinquecento€" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">200 €</span>
                      <input type="number" id="duecento€" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">100 €</span>
                      <input type="number" id="cento€" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">50 €</span>
                      <input type="number" id="cinquanta€" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">20 €</span>
                      <input type="number" id="venti€" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">10 €</span>
                      <input type="number" id="dieci€" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">5 €</span>
                      <input type="number" id="cinque€" class="form-control" placeholder="">
                  </div>
                  <br>

                  <hr>

                  <br>
                  <div class="mt-30">
                    <div class="input-group input-group-lg text-center">
                        <span class="input-group-addon">2 €</span>
                        <input type="number" id="due€" class="form-control" placeholder="">
                    </div>
                    <div class="input-group input-group-lg text-center">
                        <span class="input-group-addon">1 €</span>
                        <input type="number" id="uno€" class="form-control" placeholder="">
                    </div>
                    <div class="input-group input-group-lg text-center">
                        <span class="input-group-addon">0.50 €</span>
                        <input type="number" id="cinquantaCent" class="form-control" placeholder="">
                    </div>
                    <div class="input-group input-group-lg text-center">
                        <span class="input-group-addon">0.20 €</span>
                        <input type="number" id="ventiCent" class="form-control" placeholder="">
                    </div>
                    <div class="input-group input-group-lg text-center">
                        <span class="input-group-addon">0.10 €</span>
                        <input type="number" id="dieciCent" class="form-control" placeholder="">
                    </div>
                    <div class="input-group input-group-lg text-center">
                        <span class="input-group-addon">0.05 €</span>
                        <input type="number" id="cinqueCent" class="form-control" placeholder="">
                    </div>
                    <div class="input-group input-group-lg text-center">
                        <span class="input-group-addon">0.02 €</span>
                        <input type="number" id="dueCent" class="form-control" placeholder="">
                    </div>
                    <div class="input-group input-group-lg text-center">
                        <span class="input-group-addon">0.01 €</span>
                        <input type="number" id="unCent" class="form-control" placeholder="">
                    </div>
                  </div>

                  <br>

                </div>
                <div class="col-lg-4">
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale500" class="form-control" placeholder="">

                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale200" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale100" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale50" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale20" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale10" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale5" class="form-control" placeholder="">
                  </div>
                  <br>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">Di cui in Banconote:</span>
                      <input type="number" id="totaleBanconote" class="form-control" placeholder="">
                  </div>
                  <br>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale2" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale1" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale050" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale020" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale010" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale005" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale002" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <input type="number" id="totale001" class="form-control" placeholder="">
                  </div>
                  <br>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">Di cui in Monete:</span>
                      <input type="number" id="totaleMonete" class="form-control" placeholder="">
                  </div>

                  <br>

                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">TOTALE:</span>
                      <input type="number" id="totaleCombinato" class="form-control" placeholder="">
                  </div>
                  <br>
                  <div class="inline">
                    <p>DATABASE</p>
                  </div>
                </div>
              </div>
            </form>
        </div>

      </div>
    </div>
  </div>
</div>
