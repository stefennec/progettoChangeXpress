<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cambi */

$this->title = 'Create Cambi';
$this->params['breadcrumbs'][] = ['label' => 'Cambis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cambi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
