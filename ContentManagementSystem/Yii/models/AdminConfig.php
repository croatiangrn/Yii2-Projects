<?php

namespace app\models;

use Yii;
use yii\base\Model;

class AdminConfig extends Model 
{
	public function currentUser()
	{
		$id_korisnika = \Yii::$app->getRequest()->getCookies()->getValue('id_korisnika');
		return $id_korisnika;
	}
}