<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Comuni */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Comunis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comuni-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'comune',
            'istat',
            'provincia',
            'prov',
            'regione',
            'area_geo',
            'pop_residente',
            'pop_straniera',
            'densita_demogr',
            'superficie_kmq',
            'altezza_min',
            'altezza_max',
            'altezza_centro',
            'zona_altimetrica:datetime',
            'tipo_comune',
            'grado_urbaniz',
            'indice_montanita',
            'zona_climatica',
            'zona_sismica',
            'classe_comune1',
            'classe_comune2',
            'classe_comune_descr1',
            'latitudine_g1',
            'latitudine_g2',
            'longitudine_g1',
            'longitudine_g2',
        ],
    ]) ?>

</div>
