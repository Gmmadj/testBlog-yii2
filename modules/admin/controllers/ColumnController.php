<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Column;
use app\models\Block;
use app\models\ColumnSearch;
use app\controllers\AppController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * ColumnController implements the CRUD actions for Column model.
 */
class ColumnController extends AppController
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
     * Lists all Column models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ColumnSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Column model.
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
     * Creates a new Column model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Column();
        $selectedBlock = $model->block->id;
        $blocks = ArrayHelper::map(Block::find()->all(), 'id', 'title');

        if (Yii::$app->request->isPost) {
            if ($this->formProcessing($model)) {
                $block_id = Yii::$app->request->post('block_id');

                if ($model->saveBlock($block_id)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }   
        }

        return $this->render('create', [
            'model' => $model,
            'selectedBlock' => $selectedBlock,
            'blocks' => $blocks,
        ]);
    }

    /**
     * Updates an existing Column model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $selectedBlock = $model->block->id;
        $blocks = ArrayHelper::map(Block::find()->all(), 'id', 'title');

        if (Yii::$app->request->isPost) {
            if ($this->formProcessing($model)) {
                $block_id = Yii::$app->request->post('block_id');

                if ($model->saveBlock($block_id)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }   
        }

        return $this->render('update', [
            'model' => $model,
            'selectedBlock' => $selectedBlock,
            'blocks' => $blocks,
        ]);
    }

    /**
     * Deletes an existing Column model.
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
     * Finds the Column model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Column the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Column::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
