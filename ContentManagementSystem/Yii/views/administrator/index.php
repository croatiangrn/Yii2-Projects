<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = Yii::t('app','Dashboard');
?>
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?= $this->title ?>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <?= $this->title ?>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-pencil fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">123</div>
                                        <div><?= Yii::t('app','Number of posts') ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Blog posts</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th><?= Yii::t('app','Title') ?></th>
                                                <th><?= Yii::t('app','Edit') ?></th>
                                                <th><?= Yii::t('app','Delete') ?></th>
                                                <th><?= Yii::t('app','View') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?= 'Naslov' ?></td>
                                                <td><?= Html::a(Yii::t('app','Edit'),['admin/edit-post','id' => 123]) ?></td>
                                                <td><?= Html::a(Yii::t('app','Delete'),['admin/delete-post','id' => 123]) ?></td>
                                                <td><?= Html::a(Yii::t('app','View'),('http://aim-higher.de/blog'),['target' => 'blank']) ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->