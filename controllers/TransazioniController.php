<?php

namespace app\controllers;

use Yii;
use app\models\Transazioni;
use app\models\TransazioniSearch;
use app\models\Clienti;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Valute;
use mPDF;

/**
 * TransazioniController implements the CRUD actions for Transazioni model.
 */
class TransazioniController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Transazioni models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TransazioniSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Transazioni model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Transazioni model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Transazioni();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Transazioni model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Transazioni model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Transazioni model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Transazioni the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Transazioni::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }





    public function actionCalculator($id = null)
    {
    if($id){
      $modelTransazioni = new Transazioni();

      return $this->render('calculator', [
        'model' => $modelTransazioni,
        'idClient'=>$id,
      ]);
    }else{
      $modelClienti = new Clienti();
      $modelTransazioni = new Transazioni();

      if ($modelClienti->load(Yii::$app->request->post()) && $modelClienti->save()){

          return $this->render('calculator', [
            'model' => $modelTransazioni,
            'idClient'=>$modelClienti->id,
          ]);
        }
      }
    }









    public function actionCalculatorVendita()
    {
        $model = new Transazioni();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('calculator-vendita', [
            'model' => $model,
        ]);
    }

    public function actionCalculatorMcv()
    {
        $model = new Transazioni();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('calculator-mcv', [
            'model' => $model,
        ]);
    }

    public function actionCreateandprintacquisto()
    {
        $model = new Transazioni();

        if ($model->load(Yii::$app->request->post())) {
          $time=date_default_timezone_set('Europe/Rome');
          $data=time();
          $data=date('Y-m-d H:i:s', $data);

          $model->ora=$data;

      $model->save();

              $idTransazione = $model->id;

              $mpdf=new \Mpdf\Mpdf([
                'format' => [80, 80],
                'margin_left' => 1,
                'margin_right' => 1,
                'margin_top' => 1,
                'margin_bottom' => 1,
                'margin_header' => 0,
                'margin_footer' => 0,
                'orientation' => 'P',
              ]);

              $stylesheet = file_get_contents('css/stylePdf.css');

              $mpdf->WriteHTML($stylesheet,1);

              $mpdf->WriteHTML($this->renderPartial('ordercreatepdfacquisto', [
              'model' => $model,]),2);



          $mpdf->Output($idTransazione.'.pdf', 'I');/*Insert D al posto di I(visualizza in browser) per il Download */
            return $this->redirect(['view', 'id' => $model->id]);
        }

        //se il model è vuoto torna all'indice
        $searchModel = new TransazioniSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionStampatransazionigiornaliere(){
      Yii::$app->request->post();
      $mpdf=new \Mpdf\Mpdf([
        'format' => 'A4',
        'margin_left' => 5,
        'margin_right' => 5,
        'margin_top' => 5,
        'margin_bottom' => 5,
        'margin_header' => 0,
        'margin_footer' => 0,
        'orientation' => 'L',
      ]);

      $stylesheet = file_get_contents('css/stylePdfTransazioniGiornaliere.css');

      $mpdf->WriteHTML($stylesheet,1);

      $mpdf->WriteHTML($this->renderPartial('listatransazionigiornaliere'));
      $mpdf->Output('listinoTransazioni.pdf', 'I');
    }

      // When a newclient is to register
      // public function actionRegisternewclient(){
      //
      //
      //   return $this->render('create', [
      //       'model' => $model,
      //   ]);
      // }



}
