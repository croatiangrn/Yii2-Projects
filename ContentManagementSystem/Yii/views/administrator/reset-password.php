<?php
use yii\helpers\Html;
$this->title = 'Reset your password';


// Jesu li dobri podaci iz linka?
?>

<h1><?= $this->title ?></h1>
                
        <?= Html::beginForm(['admin/update-password'],'post',['class' => 'form']) ?>
		<input type="hidden" name="email" value="<?= Yii::$app->request->get('email') ?>">
        <input type="password" placeholder="Password" name="password">
        <input type="password" placeholder="Repeat password" name="password1">
        <button type="submit">Update password</button><br>
        <?= Html::endForm() ?>