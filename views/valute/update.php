<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Valute */

$this->title = 'Update Valute: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Valutes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="valute-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
