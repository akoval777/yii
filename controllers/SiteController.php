<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Projects;
use yii\data\ActiveDataProvider;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            if($model->login())
                return $this->goBack();
            else {
                Yii::$app->session->setFlash('error', 'Возникла ошибка при авторизации');
                Yii::error('Ошибка при регистрации');
                return $this->refresh();
            }
        }
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContacts()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contacts', [
            'model' => $model,
        ]);
    }

    /**
     * Displays services page.
     *
     * @return string
     */
    public function actionServices()
    {
        return $this->render('services');
    }

    /**
     * Displays projects page.
     *
     * @return string
     */

    public function actionProjects($id = 0)
    {
        if(!$id){
            $data = new ActiveDataProvider([
                'query' => Projects::find()->where(['flag' => 0]),
                'pagination' => [
                    'pagesize' => 2,
                ],
            ]);
            return $this->render('projects', ['data' => $data]);
        }else{
            /* $dataProvider = new ActiveDataProvider([
                'query' => News::find()->where(['id' => $id]),
            ]); */
            $data = Projects::find()->where(['id' => $id])->one();
            return $this->render('project', ['data' => $data]);
        }
        //$display = Yii::$app->request->get('nameToDisplay');
        //return $this->render('projects', ['name' => $display]);
    }
}
