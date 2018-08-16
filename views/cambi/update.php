<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cambi */

$this->title = 'Update Cambi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cambis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cambi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
