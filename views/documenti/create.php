<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Documenti */

$this->title = 'Create Documenti';
$this->params['breadcrumbs'][] = ['label' => 'Documentis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="documenti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
