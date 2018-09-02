<?php

namespace app\controllers;

use Yii;
use app\models\Clienti;
use app\models\ClientiSearch;
use app\models\Comuni;
use app\models\Province;
use app\models\Stati;
use app\models\Enti;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ClientiController implements the CRUD actions for Clienti model.
 */
class ClientiController extends Controller
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
     * Lists all Clienti models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClientiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Clienti model.
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
     * Creates a new Clienti model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    /*public function actionCreate()
    {
        $model = new Clienti();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }*/

    /**
     * Updates an existing Clienti model.
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
     * Deletes an existing Clienti model.
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
     * Finds the Clienti model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Clienti the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Clienti::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionNewcliente()
    {
      $model = new Clienti();
      
      

       if ($model->load(Yii::$app->request->post())) {
         
         
         $personaCliente = Clienti::find()
             ->andWhere(['nomeCliente'=> $model->nomeCliente])
             ->andWhere(['cognomeCliente'=> $model->cognomeCliente])
             ->all();
             
        if($personaCliente){
          return $this->render('update', [
              'model' => $model,
          ]);
        }else{
          Yii::$app->session->setFlash('info','Il cliente non è mai stato registrato, pregasi registrarlo');
          
          return $this->render('newcliente', [
              'model' => $model,
          ]);
        }

             
         
      }
      // se si accede indipendentemente senza passare dal post va all'index
      else{
        $searchModel = new ClientiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
      }

    }
// Open page find cliente
public function actionFindcliente()
{
  $model = new Clienti();
  
  return $this->render('findcliente', [
      'model' => $model,
  ]);
}
}
