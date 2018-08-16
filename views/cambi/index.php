<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Valute;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CambiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cambis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cambi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cambi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'valuta',
            ['attribute'=>'valuta',
              'format'=>'raw',
              'value' => function ($model, $key, $index){
                if ($model->valuta==null)
                    return "-";
                    $idValuta=$model->valuta;
                    $isoValuta=Valute::find()->where(['id'=>$idValuta])->one();

                    if($isoValuta)
                      return Html::a($isoValuta->isoCode,'/valute/view?id='.$idValuta);
                      else
                        return "Valuta inesistente";
              }
              ],
            'descrizione',
            'rateUfficialeAcquisto',
            'rateUfficialeVendita',
            'spreadAcquisto',
            'spreadVendita',
            'prezzoMedioAcquisto',
            'prezzoMedioVendita',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
