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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/grid.css',  
        'css/bootstrap.min.css', 
        'css/search.css',        
        'css/stellar.css',        
        'css/camera.css',        
        'css/style.css',        
        'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
        'css/contact-form.css',    
        'css/component.css',
        'css/default.css',
        'css/responsive_widths.css'
    ];
    public $js = [
        // 'js/script.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js',
        'js/jquery.mobilemenu.js',
        'js/jquery-migrate-1.2.1.js',
        'js/jquery.cookie.js',
        'js/device.min.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.ui.totop.js',
        'js/jquery.mousewheel.min.js',
        'js/jquery.simplr.smoothscroll.min.js',
        'js/jquery.superscrollorama.js',
        'js/stelar/jquery.stellar.js',
        'js/superfish.js',
        'js/classie.js',
    ];

    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];

}
