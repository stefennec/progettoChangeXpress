<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ammanchi */

$this->title = 'Update Ammanchi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ammanchis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ammanchi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
