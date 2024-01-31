<?php

/**
 * Team:对影成三人队
 * By wukui
 * faq control
 */

namespace frontend\controllers;
use Yii;
use yii\bootstrap\Alert;
use yii\web\Controller;
use common\models\Faq;
    /**
     * upload questions.
     *
     * @return mixed
     */
class AskController extends Controller
{
    public function actionAsk()
    {
        \yii\helpers\Url::remember();
        $model = new Faq();
        // if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            // Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
        //     return $this->goHome();
        // }

        // return $this->render('signup', [
        //     'model' => $model,
        // ]);
        $model->question = Yii::$app->request->post('question');
        $model->save();
        Yii::$app->session->setFlash('success', 'Thank you for your question! We will reply soon.');
        $this->redirect(Yii::$app->request->referrer);
        // $this->render(Yii::$app->session->getViewPath(), [
        //     'model' => $model,
        // ]);
    }
}