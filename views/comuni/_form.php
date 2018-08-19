<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comuni */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comuni-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'comune')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'istat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provincia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prov')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'regione')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area_geo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pop_residente')->textInput() ?>

    <?= $form->field($model, 'pop_straniera')->textInput() ?>

    <?= $form->field($model, 'densita_demogr')->textInput() ?>

    <?= $form->field($model, 'superficie_kmq')->textInput() ?>

    <?= $form->field($model, 'altezza_min')->textInput() ?>

    <?= $form->field($model, 'altezza_max')->textInput() ?>

    <?= $form->field($model, 'altezza_centro')->textInput() ?>

    <?= $form->field($model, 'zona_altimetrica')->textInput() ?>

    <?= $form->field($model, 'tipo_comune')->textInput() ?>

    <?= $form->field($model, 'grado_urbaniz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indice_montanita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zona_climatica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zona_sismica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'classe_comune1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'classe_comune2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'classe_comune_descr1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitudine_g1')->textInput() ?>

    <?= $form->field($model, 'latitudine_g2')->textInput() ?>

    <?= $form->field($model, 'longitudine_g1')->textInput() ?>

    <?= $form->field($model, 'longitudine_g2')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
