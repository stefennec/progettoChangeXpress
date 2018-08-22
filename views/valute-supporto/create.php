<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ValuteSupporto */

$this->title = 'Create Valute Supporto';
$this->params['breadcrumbs'][] = ['label' => 'Valute Supportos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valute-supporto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
