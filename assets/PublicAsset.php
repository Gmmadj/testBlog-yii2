<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "https://fonts.googleapis.com/css?family=Open+Sans:400,800",
        "public/css/all.min.css",
        "public/slick/slick.css",
        "public/slick/slick-theme.css",
        "public/css/bootstrap.min.css",
        "public/css/templatemo-new-vision.css",
    ];
    public $js = [
        "public/js/jquery-3.4.1.min.js",
        "public/slick/slick.min.js",
        "public/js/bootstrap.min.js",
        "public/js/templatemo-script.js",
    ];
    public $depends = [
    ];
}
