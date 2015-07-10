<?php
use dosamigos\tinymce\TinyMce;
use yii\widgets\ActiveForm;
use dosamigos\fileupload\FileUploadUI;

$this->title = 'Test plugina';
?>
<h1>File Upload Widget</h1>
<?= FileUploadUI::widget([
    'model' => $mBlogPost,
    'attribute' => 'picture',
    'url' => ['media/upload', 'id' => $mBlogPost->id], // your url, this is just for demo purposes,
    'options' => ['accept' => 'image/*'],
    'clientOptions' => [
        'maxFileSize' => 2000000
    ],
    // Also, you can specify jQuery-File-Upload events
    // see: https://github.com/blueimp/jQuery-File-Upload/wiki/Options#processing-callback-options
    'clientEvents' => [
        'fileuploaddone' => 'function(e, data) {
                                console.log(e);
                                console.log(data);
                            }',
        'fileuploadfail' => 'function(e, data) {
                                console.log(e);
                                console.log(data);
                            }',
    ],
]);?>
<h1>TinyMCE widget</h1>
<?php
$form = ActiveForm::begin();
echo $form->field($mBlogPost, 'content')->widget(TinyMce::className(), [
    'options' => ['rows' => 8,'cols' => 50],
    'language' => 'en-US',
    'clientOptions' => [
        'plugins' => [
            "advlist autolink lists link charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    ]
]);?>