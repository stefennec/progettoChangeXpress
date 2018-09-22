<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ComuniSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lista Comuni';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comuni-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Aggiungi Comune', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            //
            // 'id',
            'comune',
            // 'istat',
            'provincia',
            'prov',
            //'regione',
            //'area_geo',
            //'pop_residente',
            //'pop_straniera',
            //'densita_demogr',
            //'superficie_kmq',
            //'altezza_min',
            //'altezza_max',
            //'altezza_centro',
            //'zona_altimetrica:datetime',
            //'tipo_comune',
            //'grado_urbaniz',
            //'indice_montanita',
            //'zona_climatica',
            //'zona_sismica',
            //'classe_comune1',
            //'classe_comune2',
            //'classe_comune_descr1',
            //'latitudine_g1',
            //'latitudine_g2',
            //'longitudine_g1',
            //'longitudine_g2',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
