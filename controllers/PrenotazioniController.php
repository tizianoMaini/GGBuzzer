<?php

namespace app\controllers;

use Yii;
use app\models\Prenotazioni;
use app\models\PrenotazioniSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PrenotazioniController implements the CRUD actions for Prenotazioni model.
 */
class PrenotazioniController extends Controller
{

    /**
     * Lists all Prenotazioni models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PrenotazioniSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Prenotazioni model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Prenotazioni model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Prenotazioni();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->pren_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    
    public function actionBuzz($id)
    {
        $model = new Prenotazioni();
        $model->id_squadra = $id;
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['buzz', 'id' => $model->id_squadra]);
        } else {
            return $this->render('createBuzz', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Prenotazioni model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->pren_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Prenotazioni model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = new Prenotazioni();
        $model->deleteAll();

        return $this->redirect(['index']);
    }
    
        
    public function actionCancellaAll()
    {
        $model = new Prenotazioni();
        $model->deleteAll();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Prenotazioni model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Prenotazioni the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Prenotazioni::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
