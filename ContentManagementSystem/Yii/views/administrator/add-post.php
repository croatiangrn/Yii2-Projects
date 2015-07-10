<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use dosamigos\tinymce\TinyMce;
use yii\helpers\Url;

$this->title = 'Add post';
$korisnik = \Yii::$app->getRequest()->getCookies()->getValue('id_korisnika');
?>
<script src="<?= Url::base() ?>/js/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
        new nicEditor({fullPanel : true}).panelInstance('tekst_bloga');
  });
</script>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?= $this->title ?>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                            	<?= Html::a('<i class="fa fa-dashboard"></i>  Dashboard',['admin/index']) ?>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> <?= $this->title ?>	
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

				<div class="row">
					<div class="col-lg-12">
						<?php
						$form = ActiveForm::begin();
						echo $form->field($model, 'content')->widget(TinyMce::className(), [
						    'options' => ['rows' => 6],
						    'language' => 'en',
						    'clientOptions' => [
						        'plugins' => [
						            "advlist autolink lists link charmap print preview anchor",
						            "searchreplace visualblocks code fullscreen",
						            "insertdatetime media table contextmenu paste"
						        ],
						        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
						    ]
						]);?>
					</div>
				</div>
                <div class="row">
                    <div class="col-lg-12">
                        <?= Html::beginForm(['admin/insert-post'],'post',['role' => 'form']) ?>

                            <input type="hidden" name="author" value="<?= $korisnik ?>">
                            <div class="form-group">
                                <label>Author:</label>
                                <p class="form-control-static"><?= $korisnik ?></p>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" placeholder="Enter title here..." name="title">
                            </div>

                            <div class="form-group">
                                <label>Text area</label>
                                <textarea class="form-control" rows="20" id="tekst_bloga" name="content"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Category (<i>Multiple categories: Ctrl + Left-Click Mouse)</i></label>
                                <select class="form-control" name="category">
                                    <option value="Story-Telling">Story-Telling</option>
                                    <option value="Texte">Texte</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Blog">Blog</option>
                                    <option value="Test Category">Test Category</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>
                        <?= Html::endForm() ?>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->