<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Stati */

$this->title = 'Update Stati: ' . $model->id_stati;
$this->params['breadcrumbs'][] = ['label' => 'Statis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_stati, 'url' => ['view', 'id' => $model->id_stati]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stati-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
