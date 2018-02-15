<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;
use common\assets\Html5shiv;

/**
 * Frontend application asset
 */
class FrontendAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $basePath = '@webroot';
    /**
     * @var string
     */
    public $baseUrl = '@web';

    /**
     * @var array
     */
    public $css = [
//        'bundle/style.css',
        'css/css-plugin-collections.css',
        'css/menuzord-skins/menuzord-boxed.css',
        'css/style-main.css',
        'css/colors/theme-skin-lemon.css',
        'css/custom-bootstrap-margin-padding.css',
        'css/responsive.css',
        'js/revolution-slider/css/settings.css',
        'js/revolution-slider/css/layers.css',
        'js/revolution-slider/css/navigation.css',
    ];

    /**
     * @var array
     */
    public $js = [
//        'bundle/app.js',
        'js/jquery-2.2.4.min.js',
        'js/jquery-ui.min.js',
        'js/bootstrap.min.js',
        'js/jquery-plugin-collection.js',
        'js/revolution-slider/js/jquery.themepunch.revolution.min.js',
        'js/calendar-events-data.js',
        'js/custom.js',
        'js/revolution-slider/js/extensions/revolution.extension.actions.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.carousel.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.migration.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.navigation.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.parallax.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.video.min.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
        Html5shiv::class,
    ];
}
