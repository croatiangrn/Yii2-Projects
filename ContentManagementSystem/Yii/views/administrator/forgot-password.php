<?php
use yii\helpers\Html;
$this->title = 'Forgot password?';
?>
<h1><?= $this->title ?></h1>
                
        <?= Html::beginForm(['admin/process-forgot-password'],'post',['class' => 'form']) ?>

        <input type="text" placeholder="Enter your e-mail" name="email">
        <button type="submit">Login</button><br>
        <?= Html::a('Return to login',['admin/login'],['style' => 'text-decoration:none;color:#FFFFFF;font-size:24px;margin-top:10px;']) ?>
        <?= Html::endForm() ?>