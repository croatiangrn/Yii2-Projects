<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\BlogPost;
use app\models\Users;

class SiteController extends Controller
{
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

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }


    /* Kundennutzen */
    public function actionKundennutzen()
    {
        return $this->render('kundennutzen');
    }

    public function actionBerater()
    {
        return $this->render('berater');
    }

    public function actionGarantie()
    {
        return $this->render('garantie');
    }



    public function actionBlog()
    {
        $korisnik = new Users();
        $query = BlogPost::find()->orderBy('id DESC');
        $countQuery = clone $query;
        $pages = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize' => 8,
        ]);
        $postovi = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('blog', [
             'postovi' => $postovi,
             'pages' => $pages,
             'korisnik' => $korisnik,
        ]);
    }

    public function actionKontakt()
    {
        return $this->render('kontakt');
    }

    public function actionLeistungen()
    {
        return $this->render('leistungen');
    }

    public function actionReferenzen()
    {
        return $this->render('referenzen');
    }

    public function actionMailSenden()
    {
        $post = Yii::$app->request->post();

        
        $name = $post['name'];
        $firma = $post['firma'];
        $email = $post['email'];
        $phone = $post['phone'];
        $website = $post['website'];
        $message = nl2br($post['message']);
        $posalji = Yii::$app->mailer->compose()
            ->setFrom('admin@motelkiwi.com')
            ->setTo('mikulic.marko996@gmail.com')
            ->setSubject('Kontakt Query from '.$email)
            ->setHtmlBody('
                <p>Kontakt Query</p>
                <br>
                Name: '.$name.'<br>
                Firma: '.$firma.'<br>
                E-mail: '.$email.'<br>
                Phone: '.$phone.'<br>
                Website: '.$website.'<br>
                Nachricht: '.$message.'
                ')
            ->send();
        if ($posalji)
        {
            Yii::$app->session->setFlash('poruka','Message sent successfully');
        }
        else
        {
            Yii::$app->session->setFlash('poruka','Error: Something went wrong with sending a message');
        }

        return $this->redirect(['site/kontakt#message-post']);
    }
}
