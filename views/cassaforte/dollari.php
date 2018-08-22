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
          <h1>Conteggio Dollari</h1>
        </div>
        <div class="panel-body text-center">
          <h2>Tagli USD</h2>

            <form class="text-center">

              <div class="row">
                <div class="col-lg-4">
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">100 $</span>
                      <input type="number" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">50 $</span>
                      <input type="number" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">20 $</span>
                      <input type="number" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">10 $</span>
                      <input type="number" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">5 $</span>
                      <input type="number" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">2 $</span>
                      <input type="number" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">1 $</span>
                      <input type="number" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">Overlimit $</span>
                      <input type="number" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <span class="input-group-addon">STOCK $</span>
                      <input type="number" class="form-control" placeholder="">
                  </div>
                  <div class="input-group input-group-lg text-center">
                      <p>
                      TOTALE IN DATABASE </p>
                  </div>
                </div>
              </div>

            </form>


        </div>
        <div class="panel-footer">
          <div class="input-group input-group-lg text-center">
              <span class="input-group-addon">TOTALE CALCOLATO SUL MOMENTO $</span>
              <input type="number" class="form-control" placeholder="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
