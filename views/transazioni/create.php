<?php

use yii\helpers\Html;
use app\models\Valute;


/* @var $this yii\web\View */
/* @var $model app\models\Transazioni */

$this->title = 'Create Transazioni';
$this->params['breadcrumbs'][] = ['label' => 'Transazionis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transazioni-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
