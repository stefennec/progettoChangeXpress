<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Uffici */

$this->title = 'Create Uffici';
$this->params['breadcrumbs'][] = ['label' => 'Ufficis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uffici-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
