<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Stati */

$this->title = $model->id_stati;
$this->params['breadcrumbs'][] = ['label' => 'Statis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stati-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_stati], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_stati], [
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
            'id_stati',
            'nome_stati',
            'sigla_numerica_stati',
            'sigla_iso_3166_1_alpha_3_stati',
            'sigla_iso_3166_1_alpha_2_stati',
        ],
    ]) ?>

</div>
