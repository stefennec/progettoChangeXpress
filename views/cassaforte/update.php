<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cassaforte */

$this->title = 'Update Cassaforte: ' . $model->idValuta;
$this->params['breadcrumbs'][] = ['label' => 'Cassafortes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idValuta, 'url' => ['view', 'id' => $model->idValuta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cassaforte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
