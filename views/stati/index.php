<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\StatiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Statis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stati-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stati', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_stati',
            'nome_stati',
            'sigla_numerica_stati',
            'sigla_iso_3166_1_alpha_3_stati',
            'sigla_iso_3166_1_alpha_2_stati',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
