<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Stati;
use app\models\Documenti;
use app\models\Clienti;
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
              <li class="disabled"><a href="#step-3">
                  <h4 class="list-group-item-heading">Step 1</h4>
                  <p class="list-group-item-text">Inserire nome & cognome</p>
              </a></li>
              <li class="active"><a href="#step-2">
                  <h4 class="list-group-item-heading">Step 2</h4>
                  <p class="list-group-item-text">Scegliere cliente già registrato</p>
              </a></li>
                <li class="disabled"><a href="#step-4">
                    <h4 class="list-group-item-heading">Step 3</h4>
                    <p class="list-group-item-text">Calcolare l'importo</p>
                </a></li>
                <li class="disabled"><a href="#step-5">
                    <h4 class="list-group-item-heading">Step 4</h4>
                    <p class="list-group-item-text">Salvare</p>
                </a></li>
            </ul>
        </div>
	</div>
<?php 
// print_r($model);
 ?>  
<div class="container row">
  <div class="col-xs-10">
    <table class="table table-striped">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Data di Nascita</th>
            <th>Nazionalita</th>
            <th>Luogo di Nascita</th>
            <th>Documento</th>
            <th>Estremi documento</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php 
            // print_r($personaCliente);
            forEach($personaCliente as $singleClient){
             ?>
              <td><?php echo $singleClient->nomeCliente ?></td>
              <td><?php echo $singleClient->cognomeCliente ?></td>
              <td><?php echo $singleClient->dataNascita ?></td>
              <td><?php echo $singleClient->nazionalita ?></td>
              <td><?php echo $singleClient->luogoNascita ?></td>
              <td><?php echo $singleClient->tipoDocumento ?></td>
              <td><?php echo $singleClient->numeroDocumento ?></td>
              <td><?php 
            ?>
                                        
          <!-- il porta l'id da un altra parte -->
            <?= Html::a(Yii::t('app', 'Scegli questo cliente'), ['transazioni/choosecalculator', 'id' => $singleClient->id], [
                'class' => 'btn btn-success btn',
                'data' => [
                    'confirm' => Yii::t('app', 'Sei sicuro di voler scegliere quest utente?'),
                    'method' => 'post',
                ],
            ]) ?>
              </td>
            </tr>
        <?php } ?>
        </tbody>
      </table>
      <div class="row form-group">
              <div class="col-xs-4 mx-auto">
                  <?= Html::a("Inserisci un nuovo cliente", ['clienti/newcliente'], [
                      'class' => 'btn btn-success btn-lg',
                      'data' => [
                          'method' => 'post',
                      ],
                  ]) ?>
              </div>
            </div>
    </div> 
 </div> 
