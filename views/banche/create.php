<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Banche */

$this->title = 'Create Banche';
$this->params['breadcrumbs'][] = ['label' => 'Banches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banche-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
