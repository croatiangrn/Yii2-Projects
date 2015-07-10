<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Dashboard';
$broj_postova = $mBlog->brojPostova();
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
                                        <div class="huge"><?= $broj_postova ?></div>
                                        <div>Blog post(s)</div>
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
                                                <th>Title</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                                <th>View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        	foreach ($postovi as $key => $val)
                                        	{
                                        		$id = $val['id'];
                                        		$title = $val['title'];
                                        	?>
                                            <tr>
                                                <td><?= $title ?></td>
                                                <td><?= Html::a('Edit',['admin/edit-post','id' => $id]) ?></td>
                                                <td><?= Html::a('Delete',['admin/delete-post','id' => $id]) ?></td>
                                                <td><?= Html::a('View',('http://aim-higher.de/blog'),['target' => 'blank']) ?></td>
                                            </tr>
                                            <?php
                                        	}
                                        	?>
                                        </tbody>
                                    </table>
                                </div>

                                <?php
                                echo LinkPager::widget([
                                    'pagination' => $stranice,
                                ]);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

