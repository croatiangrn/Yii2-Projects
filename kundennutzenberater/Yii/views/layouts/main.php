<?php
use yii\helpers\Url;
use yii\widgets\Menu;
use yii\helpers\Html;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <?= Html::csrfMetaTags() ?>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= Html::encode($this->title) ?> - <?= Yii::$app->name ?></title>
  <link rel="icon" href="#" type="image/x-icon">
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <style> [data-sr] { visibility: hidden; } </style>
  <!--[if (gt IE 9)|!(IE)]><!-->
  <script src="<?= Url::base() ?>/js/jquery.mobile.customized.min.js"></script>
  <!--<![endif]-->
  
<script>
var url = "<?= Url::base() ?>";
jQuery(document).ready(function() {
    jQuery(window).scroll(function() {
        if ( jQuery(window).width() > 1024) {
            if (jQuery(window).scrollTop() > 170) {
                jQuery('.naviu4c633 li').css('margin-top', '68px');
                jQuery(".naviu4c633 img").attr("src", url + "/images/logo_pola.png");
                jQuery(".navbar").css("height","120px");
                jQuery(".navbar").css("box-shadow","0px 4px 4px 0px rgba(0, 0, 0, 0.05)");
                jQuery(".navbar").css("transition","all 0.6s ease");
            } else if (jQuery(window).scrollTop() < 220){
                jQuery(".navbar").css("height","170px");
                jQuery(".navbar").css("transition","all 0.45s ease");
            }
            if (jQuery(window).scrollTop() < 98) {
                jQuery(".navbar").css("box-shadow","none");
                jQuery('.naviu4c633 li').css('margin-top', '68px');
                jQuery(".naviu4c633 img").attr("src", url + "/images/logo.png");
                jQuery(".navbar").css("transition","transform .6s ease-in");
                jQuery(".navbar").css("height","180px");
            }
        }
    });
});

$( window ).resize(function() {
    $(".navbar-collapse").css({ maxHeight: $(window).height() - $(".navbar-header").height() + "px" });
});
</script>

  <!--[if lt IE 9]>
  <script src="<?= Url::base() ?>/js/html5shiv.js"></script>
  <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
    <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
      <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
    </map>
  </div>
  <![endif]-->
  <?php $this->head() ?>
</head>


<!-- <body class="desktop"> -->
<body>
<?php $this->beginBody() ?>
<!--========================================================
                          HEADER
=========================================================-->
<nav class="navbar navbar-default navbar-fixed-top naviu4c633">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <div id="logo-1">
      <a class="navbar-brand" href="<?= Url::home() ?>">
          <img alt="Kundennutzenberater.de" src="<?= Url::base() ?>/images/logo.png">
      </a>
    </div>
    <div id="logo-2">
      <a class="navbar-brand" href="<?= Url::home() ?>">
          <img alt="Kundennutzenberater.de" src="<?= Url::base() ?>/images/logo_mali.png">
      </a>
    </div>

      <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div  class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
         <?php
          echo Menu::widget([
            'items' => [
                // ['label' => 'Home', 'url' => ['site/index']],
                ['label' => 'Kundennutzen', 'url' => ['site/kundennutzen']],
                ['label' => 'Berater', 'url' => ['site/berater']],
                ['label' => 'Garantie', 'url' => ['site/garantie']],
                ['label' => 'Leistungen', 'url' => ['site/leistungen']],
                ['label' => 'Referenzen', 'url' => ['site/referenzen']],
                ['label' => 'Blog', 'url' => ['site/blog']],
                ['label' => 'Kontakt', 'url' => ['site/kontakt']],
            ],
            'options' => [
                'class' => 'nav navbar-nav navbar-right',
            ],
          ]);
          ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--========================================================
                          CONTENT
=========================================================-->
<section id="content">
  <?= $content ?>
</section>


<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer">
<div class="modal fade response-message" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Error!</h4>
      </div>
      <div class="modal-body">Attention, recipient e-mail is not set! Please define "owner_email" variable in the MailHanlder.php file.</div>
    </div>
  </div>
</div>
  <div class="container ">
    <div class="row">
    <div class="grid_12 hidden-xs">
    <?php
          echo Menu::widget([
            'items' => [
                ['label' => 'Kundennutzen', 'url' => ['site/kundennutzen']],
                ['label' => 'Berater', 'url' => ['site/berater']],
                ['label' => 'Garantie', 'url' => ['site/garantie']],
                ['label' => 'Leistungen', 'url' => ['site/leistungen']],
                ['label' => 'Referenzen', 'url' => ['site/referenzen']],
                ['label' => 'Blog', 'url' => ['site/blog']],
                ['label' => 'Kontakt', 'url' => ['site/kontakt']],
                ['label' => 'Impressum', 'url' => ['site/impressum']]
            ],
            'options' => [
                'class' => 'inline',
            ],
            'linkTemplate' => '<a href="{url}" class="tekst_treca_razina" style="text-decoration: none;">{label} </a>',
            'activeCssClass' => 'active',
          ]);
          ?>
          <div class="tar padding_gore_20 hidden-xs">
            <span class="tekst_treca_razina">Bleiben Sie in Verbindung</span>
          </div>
          <div class="tac padding_gore_20 visible-xs">
            <span class="tekst_treca_razina">Bleiben Sie in Verbindung</span>
          </div>
    </div>
<div class="grid_12 visible-xs tac">
    <?php
          echo Menu::widget([
            'items' => [
                ['label' => 'Kundennutzen', 'url' => ['site/kundennutzen']],
                ['label' => 'Berater', 'url' => ['site/berater']],
                ['label' => 'Garantie', 'url' => ['site/garantie']],
                ['label' => 'Leistungen', 'url' => ['site/leistungen']],
                ['label' => 'Referenzen', 'url' => ['site/referenzen']],
                ['label' => 'Blog', 'url' => ['site/blog']],
                ['label' => 'Kontakt', 'url' => ['site/kontakt']],
                ['label' => 'Impressum', 'url' => ['site/impressum']]
            ],
            'options' => [
                'class' => 'inline',
                'style' => 'text-transform: capitalize;'
            ],
            'linkTemplate' => '<a href="{url}" class="tekst_treca_razina" style="text-decoration: none;">{label} </a>',
            'activeCssClass' => 'active',
          ]);
          ?>
          <div class="tar padding_gore_20 hidden-xs">
            <span class="tekst_treca_razina">Bleiben Sie in Verbindung</span>
          </div>
          <div class="tac padding_gore_20 visible-xs">
            <span class="tekst_treca_razina">Bleiben Sie in Verbindung</span>
          </div>
    </div>
     <div class="grid_12 hidden-xs ">
            <div class="privacy-block s42" id="footer_margin">
            <!--<em class="tekst_treca_razina">KUNDENNUTZEN • BERATER • GARANTIE • LEISTUNGEN • REFERENZEN • BLOG • KONTAKT • IMPRESSUM •</em>-->
            <em class="tekst_treca_razina">Copyright &copy; <span id="copyright-year"><?= date('Y') ?></span> AIM Agentur Ilicic & Moll – Die Kundennutzen-Berater </em> 
          </div>
          <div class="soc_ikone">
            <a href="#"><i class="fa fa-2x  fa-facebook fa-inverse razmak_desno_20"></i></a>
            <a href="#"><i class="fa fa-2x  fa-instagram fa-inverse razmak_desno_20"></i></a>
            <a href="#"><i class="fa fa-2x  fa-twitter fa-inverse razmak_desno_20"></i></a>
            <a href="#"><i class="fa fa-2x  fa-xing fa-inverse razmak_desno_20"></i></a>
          </div>
      </div>
 <div class="grid_12 tac visible-xs ">
            <div class="privacy-block s42" id="footer_margin grid_7 tac">
            <!--<em class="tekst_treca_razina">KUNDENNUTZEN • BERATER • GARANTIE • LEISTUNGEN • REFERENZEN • BLOG • KONTAKT • IMPRESSUM •</em>-->
            <em class="tekst_treca_razina">Copyright &copy; <span id="copyright-year"><?= date('Y') ?></span> AIM Agentur Ilicic & Moll – Die Kundennutzen-Berater </em> 
          </div>
          <div class="soc_ikone grid_4 tac">
            <a href="#"><i class="fa fa-2x  fa-facebook fa-inverse razmak_desno_20"></i></a>
            <a href="#"><i class="fa fa-2x  fa-instagram fa-inverse razmak_desno_20"></i></a>
            <a href="#"><i class="fa fa-2x  fa-twitter fa-inverse razmak_desno_20"></i></a>
            <a href="#"><i class="fa fa-2x  fa-xing fa-inverse razmak_desno_20"></i></a>
          </div>
      </div>
    </div>
  </div>
</footer>
        <!-- for the blur effect -->
        <!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
        <script>
            // this is important for IEs
            var polyfilter_scriptpath = '/js/';
        </script>

<script src="http://scrollrevealjs.org/js/scrollReveal.min.js?ver=2.1.0s"></script>
<script type="text/javascript">
      (function($) {

        'use strict';

        window.sr= new scrollReveal({
          reset: false,
          move: '50px',
          mobile: false
        });

      })();
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>