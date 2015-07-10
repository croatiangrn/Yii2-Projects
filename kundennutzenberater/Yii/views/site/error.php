<?php
use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = Yii::t('yii',$name);
?>
<div class="site-error">

    <h1></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>
</div>
    <!-- Was ist kein Kundennutzen? -->

    <div class="banner1 pozadina_home1 pat">
            <p class="p3 w1 s8 tac mar_t_8 mar_b_4" style="max-width:80%;margin-left:auto;margin-right:auto;font: 500 53px/53px 'Roboto', sans-serif;">
                <?= Html::encode($this->title) ?>
            </p>
    </div>
    <!-- Mobilne slike slidea -->
<!-- Prvi razlog -->

    <div class="banner1 pozadina_home2">
        <div class="container">
            <div class="row mar_t_5 mar_b_4">
                <div class="grid_12 s22">
                    <p class="tekst_prva_razina"><?= Html::encode($this->title) ?></p>
                    <p class="tekst_druga_razina"><?= nl2br(Html::encode($message)) ?></p>
                </div>
            </div>
        </div>
    </div>
