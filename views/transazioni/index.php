<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TransazioniSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transazionis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transazioni-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Transazioni', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ora',
            'valuta',
            'supporto',
            'quantita',
            'cambio',
            'spese',
            'percentuale',
            'netto',
            'commissioni',
            'lordo',
            'tipologiaNazioneCliente',
            'idCliente',
            'operatore',
            'fidelityCliente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>