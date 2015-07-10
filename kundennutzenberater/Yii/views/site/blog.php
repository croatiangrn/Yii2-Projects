<?php
use yii\helpers\Url;
use yii\helpers\Inflector;
use yii\widgets\LinkPager;
use yii\helpers\StringHelper;
use yii\helpers\Html;
$this->title = 'Blog';
?>
  <div class="wrapper11">
        <div class="container">
            <h2 class="tac padding_gore_80">Blog</h2>
            <div class="row">
                <div class="grid_12">
                    <?php
                    foreach ($postovi as $key => $val) {
                        $id = $val['id'];
                        $title = $val['title'];
                        $content = strip_tags(StringHelper::truncateWords(nl2br($val['content']),43));
                        $author = $val['author'];
                        $picture = $val['picture'];
                        $category = $val['category'];
                        $day = $val['day'];
                        $month = $val['month'];
                    ?>
                    <!-- BLOG POST // POČETAK -->
                   <div class="post_1">
                        <div class="bl_1" style="opacity: 1;">
                           <time datetime="01-01" data-sr="ease-in">
                              <span class="day"><?= $day ?></span>
                              <span class="month"><?= $month ?></span>
                            </time>
                           <div data-sr="ease-in"><i class="fa fa-camera"></i></div>
                        </div>
                        <img class="img_indent s3" src="<?= $picture ?>" alt="" style="width: 685px;" data-sr="ease-in">
                        <div class="extra_wrap">
                          <ul class="s50" style="margin-left: 0px; opacity: 1;">
                            <li><a href="#" data-sr="ease-in">By: <?= $author ?></a></li>
                            <li class="last"><a href="#" data-sr="ease-in"><?= $category ?></a></li>
                            <!-- <li class="last"><a href="#">5 comments</a></li> -->
                          </ul>
                          <h3 data-sr="ease-in"><?= StringHelper::truncateWords($title,5) ?></h3>
                          <p data-sr="ease-in">
                              <?= $content ?>
                          </p>
                          <div class="s52" style="margin-left: 0px; opacity: 1;">
                              <?= Html::a('Mehr sehen...',('http://www.aim-higher.de/blog'),['class' => 'btn-default orange mar_t_4','data-sr'=>"ease-in"]) ?>
                          </div>
                        </div>
                    </div>
                    <!-- BLOG POST // KRAJ -->
                <?php
                    }
                ?>
            </div>
            <div style="margin-left:50%;">
                <?php
                // display pagination
                echo LinkPager::widget([
                    'pagination' => $pages,
                ]);
                ?>
            </div>
        </div>

    </div>
    </div>