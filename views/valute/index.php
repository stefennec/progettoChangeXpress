<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ValuteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Listino Valute';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valute-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Aggiungi Valuta', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Stampa Listino Cambi', ['listinocambi'], ['class' => 'btn btn-primary',
        'data' => [
          'confirm' => 'Aggiornato correttamente il listino cambi?',
          'method' => 'post',
          ]]) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            //
            // 'id',
            'isoCode',
            'nome',
            'RateUfficialeAcquisto',
            'RateUfficialeVendita',
            'differenzialeAcquisto',
            'differenzialeVendita',
            'checkValuta',
            //'imgBandiera',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
