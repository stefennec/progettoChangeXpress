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
              <li class="active"><a href="#step-2">
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
<?php 
// print_r($model);
 ?>  
