<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cassa2 */

$this->title = 'Update Cassa2: ' . $model->idValuta;
$this->params['breadcrumbs'][] = ['label' => 'Cassa2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idValuta, 'url' => ['view', 'id' => $model->idValuta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cassa2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
