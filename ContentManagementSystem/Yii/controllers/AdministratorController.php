<?php

namespace app\controllers;

use Yii;
use app\models\Users;
use app\models\BlogPost;
use app\models\AdminConfig;

class AdministratorController extends \yii\web\Controller
{
	public $layout = 'administrator';

    public function actionIndex()
    {
        $adminConfig = new AdminConfig();
        if ($adminConfig->currentUser())
        {
    		\Yii::$app->language = 'hr';
            return $this->render('index');
            echo $this->setLanguage();
        }
        else
        {
            return $this->redirect(['administrator/login']);
        }
    }

    public function actionLogin()
    {
    	$this->layout = 'administrator_login';
    	return $this->render('login');
    }


    public function actionProcessLogin()
    {
        $model = new Users();
        if ($model->validateUser())
        {
            return $this->redirect(['administrator/index']);
        } else {
            return $this->redirect(['administrator/login']);
        }
    }

    public function actionLogout()
    {
        $cookies = Yii::$app->response->cookies;
        $cookies->remove('id_korisnika');
        return $this->redirect(['administrator/index']);
    }

    public function actionRegister()
    {
        $adminConfig = new AdminConfig();
        if ($adminConfig->currentUser())
        {
            return $this->redirect(['administrator/index']);
        }
        else
        {
            return $this->render('register');
        }
    }

    public function actionAddPost()
    {
        $this->layout = 'blank';
        $model = new BlogPost();
        return $this->render('add-post',['model' => $model]);
    }

    /**
     * actionTestPlugina funkcija koju koristimo *ISKLJUČIVO* u testingu/debuggingu,
     * kada je u deploymentu obvezno zakomentirati!
     * @since 2.0.4
     */
    public function actionTestPlugina()
    {
        $mBlogPost = new BlogPost();
        $this->layout = 'blank';
        return $this->render('test-plugina',
            ['mBlogPost' => $mBlogPost]
            );
    }
}
