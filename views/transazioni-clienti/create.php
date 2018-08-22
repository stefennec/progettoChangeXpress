<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TransazioniClienti */

$this->title = 'Create Transazioni Clienti';
$this->params['breadcrumbs'][] = ['label' => 'Transazioni Clientis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transazioni-clienti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
