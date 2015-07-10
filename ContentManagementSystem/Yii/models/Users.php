<?php

namespace app\models;

use Yii;
use yii\web\Cookie;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $resetPasswordHash
 * @property string $resetToken
 * @property string $email
 * @property integer $admin
 * @property integer $activated
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'resetPasswordHash', 'resetToken', 'email'], 'required'],
            [['username', 'password', 'resetPasswordHash', 'resetToken', 'email'], 'string'],
            [['admin', 'activated'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'resetPasswordHash' => 'Reset Password Hash',
            'resetToken' => 'Reset Token',
            'email' => 'Email',
            'admin' => 'Admin',
            'activated' => 'Activated',
        ];
    }

    /**
     * hashKorisnika(param) dohvaća hash koji je ekvivalent
     * unesenom passwordu
     * @param  string $usr vrijednost poslane lozinke u validateUser() funkciju 
     * @return boolean
     */
    public function hashKorisnika($usr)
    {
        $query = Users::find()->where('username = :username',[':username' => $usr])->one();
        if ($query)
        {
            return $query->password;
        } else {
            return false;
        }
    }


    /**
     * validateUser funkcija provjerava podatke za
     * prijavu korisnika na sustav, postavlja cookie na duuuuugo vremena
     * @return boolean
     */
    public function validateUser()
    {
        $posted_data = Yii::$app->request->post();
        $username = $posted_data['username'];
        
        if (empty($posted_data['password']))
        {
            $password = '111';
        }
        else
        {
            $password = $posted_data['password'];
        }
        if (!empty($this->hashKorisnika($username)))
        {
            $hash = $this->hashKorisnika($username);
        } else {
            return false;
        }
        
        $provjera = Yii::$app->getSecurity()->validatePassword($password, $hash);

        if ($provjera) {
            $cookie = new Cookie(
                [
                'name' => 'id_korisnika',
                'value' => $username,
                'expire' => time() + 86400 * 7
                ],
                [
                'name' => 'sifra', 
                'value' => 'asdf', 
                'expire' => time() + 86400 * 7
                ]
            );
            \Yii::$app->getResponse()->getCookies()->add($cookie);
            $provjera = true;
        } else {
            $provjera = false;
        }
        
        return $provjera;
    }

    
    /**
     * trenutniKorisnik funkcija vraća id korisnika
     * koji je trenutno prijavljen na sustav.
     * @param  int $id
     * @return int
     */
    public function trenutniKorisnik($id)
    {
        $upit = Users::findOne($id);
        return $upit;
    }

    
    /**
     * linkForRest funkcija pravi jedinstveni link za 
     * reset passworda i šalje na mail taj isti link
     * @return boolean
     */
    public function linkForReset()
    {
        $email              = Yii::$app->request->post('email');
        $upit               = Users::find()->where('email = :email',[':email' => $email])->one();

        if ($upit)
        {
            $email_posta        = $upit->email;
            $resetPasswordHash  = $upit->resetPasswordHash;
            $link = Url::base().'/index.php/admin/reset-password?email='.$email_posta.'&resetpasswordhash='.$resetPasswordHash;
            $link = '<a href="'.$link.'">'.$link.'</a>';
            $posalji = Yii::$app->mailer->compose()
                ->setFrom('admin@motelkiwi.com')
                ->setTo($email_posta)
                ->setSubject('Reset password - Kundennutzenberater.de')
                ->setHtmlBody('
                    <h1>Reset password link</h1>
                    <br>
                    Your reset password link is: '.$link.'</a>')
                ->send();
            if ($posalji)
            {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * validateResetLink funkcija provjerava je li link za reset passworda točan
     * @return boolean
     */
    public function validateResetLink()
    {
        $get_data = Yii::$app->request->get();
        $query = Users::find()->where('email = :email AND resetPasswordHash = :resetPasswordHash',['email' => $get_data['email'], 'resetPasswordHash' => $get_data['resetpasswordhash']])->one();
        if ($query)
        {
            return true;
        } else {
            return false;
        }
    }

    /**
     * updatePassword funkcija postavlja novu lozinku ukoliko
     * su određeni uvjeti zadovoljeni
     * @return boolean
     */
    public function updatePassword()
    {
        $post_data          = Yii::$app->request->post();
        $password           = $post_data['password'];
        $password1          = $post_data['password1'];

        if ($password === $password1)
        {
            $korisnik = Users::find()->where('email = :email',[':email' => $post_data['email']])->one();
            $korisnik->password = Yii::$app->getSecurity()->generatePasswordHash($password);
            $korisnik->resetPasswordHash = Yii::$app->getSecurity()->generateRandomString(32);

            if ($korisnik->update(false))
            {
                return true;
            } else {
                return false;
            }
        }
    }


    /**
     * registerUser funkcija se koristi za - ironično - 
     * registriranje korisnika
     * @return boolean
     */
    public function registerUser()
    {
        $post_data          = Yii::$app->request->post();
        $username           = $post_data['username'];
        $password           = $post_data['password'];
        $email              = $post_data['email'];

        if (true)
        {
            $korisnik = new Users();
            $korisnik->username = $username;
            $korisnik->password = Yii::$app->getSecurity()->generatePasswordHash($password);
            $korisnik->resetPasswordHash = Yii::$app->getSecurity()->generateRandomString(32);
            $korisnik->resetToken = Yii::$app->getSecurity()->generateRandomString(8);
            $korisnik->activated = 1;
            $korisnik->email = $email;

            if ($korisnik->save(false))
            {
                return true;
            } else {
                return false;
            }
        }
    }
}
