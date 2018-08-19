<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cassa2 */

$this->title = 'Create Cassa2';
$this->params['breadcrumbs'][] = ['label' => 'Cassa2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cassa2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
