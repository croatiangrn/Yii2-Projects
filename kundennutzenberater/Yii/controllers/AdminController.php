<?php

namespace app\controllers;

use Yii;
use app\models\Users;
use app\models\BlogPost;

class AdminController extends \yii\web\Controller
{
    public $layout = 'cms';

    public function actionAddPost()
    {
        $mUser = new Users();
        $id_korisnika = \Yii::$app->getRequest()->getCookies()->getValue('id_korisnika');
        $korisnik = $mUser->trenutniKorisnik($id_korisnika);
        return $this->render('add-post',['mKorisnik' => $korisnik]);
    }

    public function actionInsertPost()
    {
        $mBlog = new BlogPost();
        
        if ($mBlog->dodajPost())
        {
            return $this->redirect(['admin/index']);
        }
        else
        {
            echo 'Something wrong happened!';
        }
    }

    public function actionDeletePost()
    {
        $getter = Yii::$app->request->get();
        $mBlog = new BlogPost();
        $arr = $mBlog->findOne($getter['id']);
        if ($arr->delete())
        {
            return $this->redirect(['admin/index']);
        }
        else
        {
            return false;
        }
    }

    public function actionEditInfo()
    {
        $mUser = new Users();
        $id_korisnika = \Yii::$app->getRequest()->getCookies()->getValue('id_korisnika');
        $korisnik = $mUser->trenutniKorisnik($id_korisnika);
        return $this->render('edit-info',['mKorisnik' => $korisnik]);
    }

    public function actionEditPost()
    {   
        $id_korisnika = \Yii::$app->getRequest()->getCookies()->getValue('id_korisnika');
        if ($id_korisnika)
        {
            return $this->render('edit-post');
        } else {
            return $this->redirect(['admin/login']);
        }
    }

    public function actionIndex()
    {
        $mBlog = new BlogPost();
        $id_korisnika = \Yii::$app->getRequest()->getCookies()->getValue('id_korisnika');
        if ($id_korisnika)
        {
            $postovi = $mBlog->dohvatiPostove();
            $stranice = $mBlog->bpBrojStranica();
            return $this->render('index',[
                'mBlog' => $mBlog,
                'postovi' => $postovi,
                'stranice' => $stranice
                ]);
        }
        else
        {
            return $this->redirect(['admin/login']);
        }
    }

    public function actionRegister()
    {
        $model = new Users();
        $posted_data = Yii::$app->request->post();
        $username = 'demo';
        $hash = Yii::$app->getSecurity()->generatePasswordHash('demo1234');

        $model->username = $username;
        $model->password = $hash;
        $model->email = 'demo@kundennutzen.de';
        $model->active = 1;
        $model->resetPasswordHash = Yii::$app->getSecurity()->generateRandomString(32);
        $model->admin = 0;
        $model->save(false);
    }

    public function actionLogin()
    {
        $this->layout = 'cms_login';
        $value = \Yii::$app->getRequest()->getCookies()->getValue('id_korisnika');
        if ($value)
        {
            return $this->redirect(['admin/index']);
        }
        else
        {
            return $this->render('login');
        }
    }

    public function actionProcessLogin()
    {
        $model = new Users();
        if ($model->validateUser())
        {
            return $this->redirect(['admin/index']);
        } else {
            return $this->redirect(['admin/login']);
        }
    }


    public function actionLogout()
    {
        $cookies = Yii::$app->response->cookies;
        $cookies->remove('id_korisnika');
        return $this->redirect(['admin/index']);
    }

    public function actionForgotPassword()
    {
        $this->layout = 'cms_login';
        return $this->render('forgot-password');
    }

    public function actionProcessForgotPassword()
    {
        $mUser = new Users();
        $mUser->linkForReset();
            echo 'Poruka uspješno poslana! Provjerite svoj sandučić!';
    }

    public function actionResetPassword()
    {
        $this->layout = 'cms_login';
        $mUser = new Users();
        if ($mUser->validateResetLink())
        {
            return $this->render('reset-password');
        } else {
            return $this->redirect(['admin/login']);
        }
    }

    public function actionUpdatePassword()
    {
        $mUser = new Users();
        if ($mUser->updatePassword())
        {
            return $this->redirect(['admin/login']);
        } else {
            echo 'Nešto nije zadovoljeno...';
        }
    }

    public function actionUpdateInfo()
    {
        return $this->render('update-info');
    }

    public function actionUpdatePost()
    {
        return $this->render('update-post');
    }

}
