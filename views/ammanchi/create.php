<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ammanchi */

$this->title = 'Create Ammanchi';
$this->params['breadcrumbs'][] = ['label' => 'Ammanchis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ammanchi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
