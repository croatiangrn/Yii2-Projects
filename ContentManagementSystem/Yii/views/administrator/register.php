<?php
use yii\helpers\Html;
$this->title = Yii::t('app','Registration');
?>
<h1><?= $this->title ?></h1>
                
        <?= Html::beginForm(['administrator/process-login'],'post',['class' => 'form']) ?>

        <input type="text" placeholder="<?= Yii::t('app','Username') ?>" name="username">
        <input type="password" placeholder="<?= Yii::t('app','Password') ?>" name="password">
        <button type="submit"><?= Yii::t('app','Login') ?></button><br>
        <?= Html::a(Yii::t('app','Forgot your password?'),['administrator/forgot-password'],['style' => 'text-decoration:none;color:#FFFFFF;font-size:24px;margin-top:10px;']) ?>
        <?= Html::endForm() ?>