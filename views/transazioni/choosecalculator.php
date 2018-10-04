<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<!-- progress bar -->
<div class="row form-group">
        <div class="col-xs-12">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
              <li class="disabled"><a href="#step-3">
                  <h4 class="list-group-item-heading">Step 1</h4>
                  <p class="list-group-item-text">Inserire nome & cognome</p>
              </a></li>
              <li class="disabled"><a href="#step-2">
                  <h4 class="list-group-item-heading">Step 2</h4>
                  <p class="list-group-item-text">Scegliere cliente già registrato</p>
              </a></li>
              <li class="active"><a href="#step-2">
                  <h4 class="list-group-item-heading">Step 3</h4>
                  <p class="list-group-item-text">Scegliere se compare o vendere</p>
              </a></li>
                <li class="disabled"><a href="#step-4">
                    <h4 class="list-group-item-heading">Step 4</h4>
                    <p class="list-group-item-text">Calcolare l'importo</p>
                </a></li>
                <li class="disabled"><a href="#step-5">
                    <h4 class="list-group-item-heading">Step 5</h4>
                    <p class="list-group-item-text">Salvare</p>
                </a></li>
            </ul>
        </div>
	</div>
  <h2>Scegli la tipologia di calcolatrice da usare:</h2>
  <br/>
<!-- il porta l'id da un altra parte -->
  <?= Html::a(Yii::t('app', 'Scegli la calcolatrice ACQUISTO'), ['transazioni/calculator', 'id' => $idClient], [
      'class' => 'btn btn-success btn',
      'data' => [
          'confirm' => Yii::t('app', 'Sei sicuro di voler scegliere questa calcolatrice?'),
          'method' => 'post',
      ],
  ]) ?>
  
    <?= Html::a(Yii::t('app', 'Scegli la calcolatrice VENDITA'), ['transazioni/calculator-vendita', 'id' => $idClient], [
        'class' => 'btn btn-success btn',
        'data' => [
            'confirm' => Yii::t('app', 'Sei sicuro di voler scegliere questa calcolatrice?'),
            'method' => 'post',
        ],
    ]) ?>

    <!-- il porta l'id da un altra parte -->
      <?= Html::a(Yii::t('app', 'Scegli la calcolatrice MVC'), ['transazioni/calculator-mcv', 'id' => $idClient], [
          'class' => 'btn btn-success btn',
          'data' => [
              'confirm' => Yii::t('app', 'Sei sicuro di voler scegliere questa calcolatrice?'),
              'method' => 'post',
          ],
      ]) ?>
