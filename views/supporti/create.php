<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Supporti */

$this->title = 'Create Supporti';
$this->params['breadcrumbs'][] = ['label' => 'Supportis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supporti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
