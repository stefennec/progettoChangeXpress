<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Valute */

$this->title = 'Create Valute';
$this->params['breadcrumbs'][] = ['label' => 'Valutes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valute-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
