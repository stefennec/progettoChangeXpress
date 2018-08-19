<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cassa1 */

$this->title = 'Create Cassa1';
$this->params['breadcrumbs'][] = ['label' => 'Cassa1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cassa1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
