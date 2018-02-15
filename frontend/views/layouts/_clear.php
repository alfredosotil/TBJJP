<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

\frontend\assets\FrontendAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
    <head>
        <meta charset="<?php echo Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title><?php echo Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <?php echo Html::csrfMetaTags() ?>
    </head>
    <body>
        <header id="header" class="header">
            <div class="header-top sm-text-center bg-theme-colored">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <nav>
                                <ul class="list-inline sm-text-center text-left flip mt-5">
                                    <li> <a class="text-white" href="#">FAQ</a> </li>
                                    <li class="text-white">|</li>
                                    <li> <a class="text-white" href="#">Help Desk</a> </li>
                                    <li class="text-white">|</li>
                                    <li> <a class="text-white" href="#">Support</a> </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-6">
                            <div class="widget m-0 mt-5 no-border">
                                <ul class="list-inline text-right sm-text-center">
                                    <li class="pl-10 pr-10 mb-0 pb-0">
                                        <div class="header-widget text-white"><i class="fa fa-phone"></i> 123-456-789 </div>
                                    </li>
                                    <li class="pl-10 pr-10 mb-0 pb-0">
                                        <div class="header-widget text-white"><i class="fa fa-envelope-o"></i> contact@yourdomain.com </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 text-right flip sm-text-center">
                            <div class="widget m-0">
                                <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm">
                                    <li class="mb-0 pb-0"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="mb-0 pb-0"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="mb-0 pb-0"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li class="mb-0 pb-0"><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav">
                <div class="header-nav-wrapper bg-light navbar-scrolltofixed">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="menuzord-right" class="menuzord orange no-bg"> <a class="menuzord-brand stylish-header pull-left flip" href="javascript:void(0)"><img src="<?= Yii::$app->request->baseUrl; ?>/images/logo-wide-white.png" alt=""></a>
                                    <ul class="menuzord-menu onepage-nav">
                                        <li class="active"><a href="#home">Inicio</a></li>
                                        <li><a href="#about">TBJJP</a></li>
                                        <li><a href="#services">Eventos</a></li>
                                        <li><a href="#trainer">Arbitros</a></li>
                                        <li><a href="#pricing">Inscripciones</a></li>
                                        <li><a href="#blog">Auspicios</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?php $this->beginBody() ?>
        <?php echo $content ?>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
