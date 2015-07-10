<?php
use yii\helpers\Html;
$this->title = 'Administration';
?>
<h1><?= $this->title ?></h1>
                
        <?= Html::beginForm(['admin/process-login'],'post',['class' => 'form']) ?>

        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit">Login</button><br>
        <?= Html::a('Forgot your password?',['admin/forgot-password'],['style' => 'text-decoration:none;color:#FFFFFF;font-size:24px;margin-top:10px;']) ?>
        <?= Html::endForm() ?>