<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Transazioni */

$this->title = 'Update Transazioni: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transazionis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transazioni-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
