<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cassaforte */

$this->title = 'Create Cassaforte';
$this->params['breadcrumbs'][] = ['label' => 'Cassafortes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cassaforte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
