<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Stati;
use app\models\Sesso;
use app\models\Documenti;
use app\models\Enti;
use app\models\Province;
use app\models\Comuni;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ClientiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clientis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clienti-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Clienti', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'nomeCliente',
            'cognomeCliente',
            'dataNascita',

            ['attribute'=>'nazionalita',
            'format'=>'raw',
            'value'=> function($model,$key,$index){
              if($model->nazionalita==null)
                return "-";
              $idNazione=$model->nazionalita;
              $nomeNazione=Stati::find()
              ->where(['id_stati'=>$idNazione])->one();
              if($nomeNazione)
              return $nomeNazione->nome_stati;
              else
              return "Stato Inesistente";
            }],

            'luogoNascita',
            'codFiscale',

            ['attribute'=>'sesso',
            'format'=>'raw',
            'value'=> function($model,$key,$index){
              if($model->sesso==null)
                return "-";
              $idSesso=$model->sesso;
              $nomeSesso=Sesso::find()
              ->where(['id'=>$idSesso])->one();
              if($nomeSesso)
              return $nomeSesso->sesso;
              else
              return "Sesso Inesistente";
            }],
            'residenteItalia',
            'numeroDocumento',
            ['attribute'=>'tipoDocumento',
            'format'=>'raw',
            'value'=> function($model,$key,$index){
              if($model->tipoDocumento==null)
                return "-";
              $idDoc=$model->tipoDocumento;
              $nomeDoc=Documenti::find()
              ->where(['id'=>$idDoc])->one();
              if($nomeDoc)
              return $nomeDoc->nome;
            }],
            //Renderizzazione ente d'emissione
            ['attribute'=>'ente',
            'format'=>'raw',
            'value'=> function($model,$key,$index){
              if($model->ente==null)
                return "-";
              $idEnte=$model->ente;
              $nomeEnte=Enti::find()
              ->where(['id'=>$idEnte])->one();
              if($nomeEnte)
              return $nomeEnte->nome;
            }],

            ['attribute'=>'luogoEmissione',
            'format'=>'raw',
            'value'=> function($model,$key,$index){
              if($model->luogoEmissione==null)
                return "-";
              $idLuogo=$model->luogoEmissione;
              $nomeLuogo=Comuni::find()
              ->where(['id'=>$idLuogo])->one();
              if($nomeLuogo)
              return $nomeLuogo->comune;
            }],
            'scadenzaDoc',
            
            ['attribute'=>'provincia',
            'format'=>'raw',
            'value'=> function($model,$key,$index){
              if($model->provincia==null)
                return "-";
              $idProvincia=$model->provincia;
              $nomeProvincia=Province::find()
              ->where(['id_province'=>$idProvincia])->one();
              if($nomeProvincia)
              return $nomeProvincia->nome_province;
            }],
            'fidelity',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
