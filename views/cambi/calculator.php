<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Valute;

?>

<div class="cambi-form">

    <?php $form = ActiveForm::begin(); ?>

    

    
<div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card card-body text-center mt-5">
            <h1 class="heading display-5 pb-3">Loan Calculator</h1>
            <form id="loan-form">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">$</span>
                  <input type="number" class="form-control" id="amount" placeholder="Loan Amount">
                  
                </div>
              </div>
              <?= $form->field($model, 'valuta')
            ->label(false)
            ->dropdownList(Valute::find()
                            ->select(['isoCode', 'id'])
                            ->indexBy('id')
                            ->column(),
                          ['prompt'=>'Seleziona Valuta']);
   ?>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">%</span>
                  <input type="number" class="form-control" id="interest" placeholder="Interest">
                </div>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" id="years" placeholder="Years To Repay">
              </div>
              <div class="forn-group">
                <input type="submit" value="Calculate" class="btn btn-dark btn-block">
              </div>
            </form>
            <!-- LOADER -->

            <!-- <div id="loading">
              <img src="img/loading.gif" alt="">
            </div> -->

            <!-- RESULTS -->
            <div id="results" class="pt-4">
              <h5>Results</h5>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">Monthly Payment</span>
                  <input type="number" class="form-control" id="monthly-payment" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">Total Payment</span>
                  <input type="number" class="form-control" id="total-payment" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">Total Interest</span>
                  <input type="number" class="form-control" id="total-interest" disabled>
                </div>
              </div>
              <?= $form->field($model, 'descrizione')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rateUfficialeAcquisto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rateUfficialeVendita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spreadAcquisto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spreadVendita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prezzoMedioAcquisto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prezzoMedioVendita')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Salva e stampa', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
