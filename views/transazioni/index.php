<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use app\models\Transazioni;
use app\models\Valute;
use app\models\Supporti;
use app\models\TipologiaNazioni;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TransazioniSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lista Transazioni';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transazioni-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>


      <!--  -->
      <!--  -->
      <!--  -->
          <!-- FORM LISTA TRANSAZIONI -->
      <!--  -->
      <!--  -->
      <!--  -->


          <?php
           $form = ActiveForm::begin([
             'options' => [
                          'id'=>'stampa-trx'
                       ]
           ]);

           ?>

            <?php echo '<label>Stampa lista Transazioni</label>';
                echo DatePicker::widget([
                	'name' => 'lista_transazioni_giornaliere',
                  'value'=>date('Y-m-d'),
                	'options' => ['placeholder' => 'Seleziona data transazioni ...'],
                	'pluginOptions' => [
                		'format' => 'yyyy-mm-dd',
                		'todayHighlight' => true
                	]
                ]); ?>
            <?= Html::a('Stampa Transazioni Giornaliere', ['stampatransazionigiornaliere'], ['class' => 'btn btn-primary',
            'data' => [
              'confirm' => 'Data Corretta?',
              'method' => 'post',
            ],'linkOptions' => ['target'=>'_blank'],]) ?>
          <?php ActiveForm::end(); ?>

          <br>

<!-- INIZIO FORM PRIMANOTA -->

          <?php
           $form = ActiveForm::begin([
             'options' => [
                          'id'=>'stampa-primanota'
                       ]
           ]);

           ?>
           <?php echo '<label>Stampa Primanota</label>';
               echo DatePicker::widget([
                'name' => 'prima_nota',
                 'value'=>date('Y-m-d'),
                'options' => ['placeholder' => 'Seleziona data primanota ...'],
                'pluginOptions' => [
                  'format' => 'yyyy-mm-dd',
                  'todayHighlight' => true
                ]
               ]); ?>
               <?= Html::a('Stampa Primanota',['stampaprimanota'], ['class' => 'btn btn-success',
               'data' => [
                 'confirm' => 'Data Corretta?',
                 'method' => 'post',
               ]
               ]) ?>
                 <?php ActiveForm::end(); ?>
    </p>
<!--  -->
<!--  -->
<!--  -->
    <!-- GRIDVIEW -->
<!--  -->
<!--  -->
<!--  -->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'ora',

            ['attribute'=>'valuta',
            'format'=>'raw',
            'value'=> function($model,$key,$index){
              if($model->valuta==null)
                return "-";
              $idValuta=$model->valuta;
              $nomeValuta=Valute::find()
              ->where(['id'=>$idValuta])->one();
              if($nomeValuta)
              return $nomeValuta->isoCode;
              else
              return "Stato Inesistente";
            }],


            ['attribute'=>'supporto',
            'format'=>'raw',
            'value'=> function($model,$key,$index){
              if($model->supporto==null)
                return "-";
              $idSupporto=$model->supporto;
              $nomeSupporto=Supporti::find()
              ->where(['id'=>$idSupporto])->one();
              if($nomeSupporto)
              return $nomeSupporto->nome;
              else
              return "supporto inesistente";
            }],


            'quantita',
            'cambio',
            'spese',
            'percentuale',
            'netto',
            'commissioni',
            'lordo',

            ['attribute'=>'tipologiaNazioneCliente',
            'format'=>'raw',
            'value'=> function($model,$key,$index){
              if($model->tipologiaNazioneCliente==null)
                return "-";
              $idTipologia=$model->tipologiaNazioneCliente;
              $nomeTipologia=TipologiaNazioni::find()
              ->where(['id'=>$idTipologia])->one();
              if($nomeTipologia)
              return $nomeTipologia->tipologia;
              else
              return "supporto inesistente";
            }],

            'idCliente',
            'operatore',
            'fidelityCliente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
