<?php

/**
 * Team:对影成三人队
 * By li xiang
 * past CRUD func
 */

namespace backend\controllers;

use backend\models\RecordUtil;
use Yii;
use common\models\Gallery;
use common\models\GallerySearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NewsController implements the CRUD actions for Price model.
 */
class GalleryController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'allow' => false,
                        'roles' => ['?'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Gallery models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = 'backend_layout';
        $searchModel = new GallerySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Gallery model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $this->layout = 'backend_layout';
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Gallery model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout = 'backend_layout';
        $model = new Gallery();

        if (Yii::$app->request->post('is_create')) {
            $model->name = Yii::$app·->request->post('name');
            $model->details = Yii::$app->request->post('details');
            $model->introduction = Yii::$app->request->post('introduction');
            $model->title = Yii::$app->request->post('title');
            $model->weight = Yii::$app->request->post('weight');
            $model->time = Yii::$app->request->post('time');
            $model->path = 'tmp';
            $model->save();
            $model = Gallery::find()->orderBy('id DESC')->limit(1)->one();
            $suffix = (explode('.', $_FILES['file']['name']))[1];
            $filename = 'gallery-' . $model->id . '.' . $suffix;
            $temp_name = $_FILES['file']['tmp_name'];
            if (move_uploaded_file($temp_name, '../../common/static/images/past/'.$filename)){
                $model->path = $filename;
            }
            $model->save();

            RecordUtil::generateRecord('gallery', 'create');

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Price model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $this->layout = 'backend_layout';
        $model = $this->findModel($id);

        if (Yii::$app->request->post('is_update')) {
            $model->name = Yii::$app->request->post('name');
            $model->details = Yii::$app->request->post('details');
            $model->introduction = Yii::$app->request->post('introduction');
            $model->title = Yii::$app->request->post('title');
            $model->weight = Yii::$app->request->post('weight');
            $model->time = Yii::$app->request->post('time');
            if($_FILES['file']['name'] !== "") {
                $suffix = (explode('.', $_FILES['file']['name']))[1];
                $filename = explode('.', $model->path)[0] . '.' . $suffix;
                $temp_name = $_FILES['file']['tmp_name'];
                if (move_uploaded_file($temp_name, '../../common/static/images/past/'.$filename)){
                    $model->path = $filename;
                }
            }
            $model->save();

            RecordUtil::generateRecord('gallery', 'update');

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->layout = 'backend_layout';
        $this->findModel($id)->delete();
        RecordUtil::generateRecord('gallery', 'delete');

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Gallery the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Gallery::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
