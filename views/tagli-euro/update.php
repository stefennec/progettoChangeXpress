<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TagliEuro */

$this->title = 'Update Tagli Euro: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tagli Euros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tagli-euro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
