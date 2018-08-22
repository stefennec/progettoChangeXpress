<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cassa2 */

$this->title = $model->idValuta;
$this->params['breadcrumbs'][] = ['label' => 'Cassa2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cassa2-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idValuta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idValuta], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idValuta',
            'valuta',
            'quantita',
            'controvalore',
            'prezzoMedio',
            'medioEuro',
        ],
    ]) ?>

</div>
