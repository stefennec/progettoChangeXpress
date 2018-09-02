<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Stati;
use app\models\Documenti;
use app\models\Enti;
use app\models\Comuni;
use app\models\Province;
// use yii\jui\DatePicker;
use kartik\widgets\DepDrop;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use kartik\widgets\DatePicker;

?>
<!-- progress bar -->
<div class="row form-group">
        <div class="col-xs-12">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                <li class="active"><a href="#step-1">
                    <h4 class="list-group-item-heading">Step 1</h4>
                    <p class="list-group-item-text">Inserire il documento</p>
                </a></li>
                <li class="disabled"><a href="#step-2">
                    <h4 class="list-group-item-heading">Step 2</h4>
                    <p class="list-group-item-text">Calcolare l'importo</p>
                </a></li>
                <li class="disabled"><a href="#step-3">
                    <h4 class="list-group-item-heading">Step 3</h4>
                    <p class="list-group-item-text">Salvare</p>
                </a></li>
            </ul>
        </div>
	</div>
  
<div class="container">
  <div class="row">
    <div class="col-md-12 mx-auto">
      <div class="card card-body text-center mt-5">
        <h1>Registrazione Cliente</h1>
        <div class="row">
          <div class="form">
            <?php $form = ActiveForm::begin(); ?>
            <div class="col-md-6">
              <div class="form-group">
                <?= $form->field($model, 'nomeCliente')
                ->textInput(['maxlength' => true])
                ->label('Nome Cliente:')
               ?>
              </div>
              <div class="form-group">
                <?= $form->field($model, 'cognomeCliente')
                ->textInput(['maxlength' => true])
                ->label('Cognome Cliente:')
               ?>
            
            </div>
            <div class="form-group">
              <?= Html::submitButton('Registra', ['class' => 'btn btn-success btn-block']) ?>
            </div>
            <div class="form-group">
              <input type="submit" value="Annulla" class="btn btn-danger btn-block">
            </div>
            <?php ActiveForm::end(); ?>
          </div>
        </div>

        </div>
      </div>
    </div>
  </div>
</div>
