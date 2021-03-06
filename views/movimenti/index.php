<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MovimentiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movimenti';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movimenti-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Movimenta Valuta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'provenienza',
            'destinazione',
            'valuta',
            'quantitaValuta',
            'dataMovimento',
            'operatore',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
