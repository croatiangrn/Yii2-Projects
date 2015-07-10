<?php
use app\assets\LoginAsset;
use yii\helpers\Html;

LoginAsset::register($this);
?>
<!DOCTYPE html>
<html >
<?php $this->beginPage() ?>
<head>
<meta charset="UTF-8">

<title><?= $this->title ?> - ContentManagementSystem</title>

<?php $this->head() ?>

</head>

<body>
<?php $this->beginBody() ?>
<div class="wrapper">
	<div class="container">
		<?= $content ?>
	</div>
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<?php $this->endBody() ?>
</body>
<?php $this->endPage() ?>
</html>