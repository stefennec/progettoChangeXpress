<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Operatori */

$this->title = 'Create Operatori';
$this->params['breadcrumbs'][] = ['label' => 'Operatoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operatori-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
