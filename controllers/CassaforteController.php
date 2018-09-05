<?php

namespace app\controllers;

use Yii;
use app\models\Cassaforte;
use app\models\CassaforteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CassaforteController implements the CRUD actions for Cassaforte model.
 */
class CassaforteController extends Controller
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
     * Lists all Cassaforte models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CassaforteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cassaforte model.
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
     * Creates a new Cassaforte model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cassaforte();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idValuta]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Cassaforte model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idValuta]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Cassaforte model.
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
     * Finds the Cassaforte model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cassaforte the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cassaforte::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionEuro()
    {
      $model = new Cassaforte();

      if ($model->load(Yii::$app->request->post()) && $model->save()) {
          return $this->redirect(['view', 'id' => $model->id]);
      }

      return $this->render('euro', [
          'model' => $model,
      ]);
    }

    public function actionDollari()
    {
      $model = new Cassaforte();

      if ($model->load(Yii::$app->request->post()) && $model->save()) {
          return $this->redirect(['view', 'id' => $model->id]);
      }

      return $this->render('dollari', [
          'model' => $model,
      ]);

      // $query = new \yii\db\Query();
      // $quantitaUsd = $query->select('quantita')->where(['valuta'=>51])->one();
    }

    public function actionSituazionecassa(){

        // $listino = yii::$app->request->get('listino');
        $mpdf=new \Mpdf\Mpdf([
          'format' => 'A4',
          'margin_left' => 5,
          'margin_right' => 5,
          'margin_top' => 5,
          'margin_bottom' => 5,
          'margin_header' => 0,
          'margin_footer' => 0,
          'orientation' => 'P',
        ]);

        $stylesheet = file_get_contents('css/stylePdfSituazioneCassa.css');

        $mpdf->WriteHTML($stylesheet,1);

        $mpdf->WriteHTML($this->renderPartial('situazioneCassa'));
        $mpdf->Output('stampaSituazioneCassa.pdf', 'I');


    }
}
