<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Movimenti */

$this->title = 'Update Movimenti: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Movimentis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="movimenti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
