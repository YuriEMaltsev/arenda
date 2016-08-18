<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\TblUser;


class UserController extends Controller
{
    /**
     * @inheritdoc
     */
/*	 
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
                    'logout' => ['post'],
                ],
            ],
        ];
    }
*/
	
    /**
     * @inheritdoc
     */


 /*
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
*/
	
    /**
     * Displays  user data
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
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new TblUser();
        if ($model->load(Yii::$app->request->post()) && $model->Login()) {

            // echo 'Ура ты сделал это!';
            //Yii::$app->user->setIdentity( "11111" );


            //"$model->id
            //return $this->goBack();

            return $this->render('index', ['model' => $model, ]);

        }
        return $this->render('login', ['model' => $model, ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

	
}
