<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TagliEuro */

$this->title = 'Create Tagli Euro';
$this->params['breadcrumbs'][] = ['label' => 'Tagli Euros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagli-euro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
