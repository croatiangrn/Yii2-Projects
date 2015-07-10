<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class CmsAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'CMS/css/bootstrap.min.css',  
        'CMS/css/sb-admin.css',
        'CMS/css/plugins/morris.css',
        'CMS/font-awesome/css/font-awesome.min.css',
    ];
    public $js = [
        'CMS/js/jquery.js',
        'CMS/js/bootstrap.min.js',
        'CMS/js/plugins/morris/raphael.min.js',
        'CMS/js/plugins/morris/morris.min.js',
        'CMS/js/plugins/morris/morris-data.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
