<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComuniSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comuni-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'comune') ?>

    <?= $form->field($model, 'istat') ?>

    <?= $form->field($model, 'provincia') ?>

    <?= $form->field($model, 'prov') ?>

    <?php // echo $form->field($model, 'regione') ?>

    <?php // echo $form->field($model, 'area_geo') ?>

    <?php // echo $form->field($model, 'pop_residente') ?>

    <?php // echo $form->field($model, 'pop_straniera') ?>

    <?php // echo $form->field($model, 'densita_demogr') ?>

    <?php // echo $form->field($model, 'superficie_kmq') ?>

    <?php // echo $form->field($model, 'altezza_min') ?>

    <?php // echo $form->field($model, 'altezza_max') ?>

    <?php // echo $form->field($model, 'altezza_centro') ?>

    <?php // echo $form->field($model, 'zona_altimetrica') ?>

    <?php // echo $form->field($model, 'tipo_comune') ?>

    <?php // echo $form->field($model, 'grado_urbaniz') ?>

    <?php // echo $form->field($model, 'indice_montanita') ?>

    <?php // echo $form->field($model, 'zona_climatica') ?>

    <?php // echo $form->field($model, 'zona_sismica') ?>

    <?php // echo $form->field($model, 'classe_comune1') ?>

    <?php // echo $form->field($model, 'classe_comune2') ?>

    <?php // echo $form->field($model, 'classe_comune_descr1') ?>

    <?php // echo $form->field($model, 'latitudine_g1') ?>

    <?php // echo $form->field($model, 'latitudine_g2') ?>

    <?php // echo $form->field($model, 'longitudine_g1') ?>

    <?php // echo $form->field($model, 'longitudine_g2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
