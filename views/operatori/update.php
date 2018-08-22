<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Operatori */

$this->title = 'Update Operatori: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Operatoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="operatori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
