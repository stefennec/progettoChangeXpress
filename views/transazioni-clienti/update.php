<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TransazioniClienti */

$this->title = 'Update Transazioni Clienti: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transazioni Clientis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transazioni-clienti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
