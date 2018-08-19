<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ValuteSupporto */

$this->title = 'Update Valute Supporto: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Valute Supportos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="valute-supporto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
