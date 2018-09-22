<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Valute;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CassaforteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cassaforte';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cassaforte-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cassaforte', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Stampa Situazione Cassa', ['situazionecassa'], ['class' => 'btn btn-primary',
        'data' => [
          'confirm' => 'Stampare situazione cassa?',
          'method' => 'post',
          ]]) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            // 'idValuta',

            ['attribute'=>'valuta',
            'format'=>'raw',
            'value'=> function($model,$key,$index){
              if($model->valuta==null)
                return "-";
              $idCode=$model->valuta;
              $nomeCode=Valute::find()
              ->where(['id'=>$idCode])->one();
              if($nomeCode)
              return $nomeCode->isoCode;
              else
              return "Stato Inesistente";
            }],
            'quantita',
            'controvalore',
            'prezzoMedio',
            //'medioEuro',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
