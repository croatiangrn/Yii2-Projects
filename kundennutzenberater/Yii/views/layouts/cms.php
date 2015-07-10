<?php
use app\assets\CmsAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;

CmsAsset::register($this);
$id_korisnika = \Yii::$app->getRequest()->getCookies()->getValue('id_korisnika');
?>
<!DOCTYPE html>
<?php $this->beginPage() ?>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $this->title ?> - Kundennutzenberater.de</title>

<?php $this->head() ?>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php $this->beginBody() ?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?= Html::a('CMS',['admin/index'],['class' => 'navbar-brand']) ?>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $id_korisnika ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <?= Html::a('<i class="fa fa-fw fa-gear"></i> Settings',['admin/edit-info']) ?>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <?= Html::a('<i class="fa fa-fw fa-power-off"></i> Log out',['admin/logout']) ?>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <?php
                echo Menu::widget([
                    'items' => [
                        ['label' => '<i class="fa fa-fw fa-dashboard"></i> Dashboard', 'url' => ['admin/index']],
                        ['label' => '<i class="fa fa-fw fa-edit"></i> Add Blog Post', 'url' => ['admin/add-post']],
                    ],
                    'encodeLabels' => false,
                    'options' => [
                        'class' => 'nav navbar-nav side-nav'
                    ]
                    ]);
                ?>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <?= $content ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php $this->endBody() ?>
</body>
<?php $this->endPage() ?>
</html>