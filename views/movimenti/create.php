<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Movimenti */

$this->title = 'Create Movimenti';
$this->params['breadcrumbs'][] = ['label' => 'Movimentis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movimenti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
