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
print_r($model);
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
            <td><?php echo $model->nomeCliente ?></td>
            <td><?php echo $model->cognomeCliente ?></td>
            <td><?php echo $model->dataNascita ?></td>
            <td><?php echo $model->nazionalita ?></td>
            <td><?php echo $model->luogoNascita ?></td>
            <td><?php echo $model->tipoDocumento ?></td>
            <td><?php echo $model->numeroDocumento ?></td>
          </tr>
        </tbody>
      </table>
    </div> 
 </div> 
