<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@frontend/views/layouts/_clear.php')

?>
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
<div class="wrap">
    <?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
//        ],
//    ]);

    ?>
    <?php
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => [
//            ['label' => Yii::t('frontend', 'Home'), 'url' => ['/site/index']],
//            ['label' => Yii::t('frontend', 'About'), 'url' => ['/page/view', 'slug'=>'about']],
//            ['label' => Yii::t('frontend', 'Articles'), 'url' => ['/article/index']],
//            ['label' => Yii::t('frontend', 'Contact'), 'url' => ['/site/contact']],
//            ['label' => Yii::t('frontend', 'Signup'), 'url' => ['/user/sign-in/signup'], 'visible'=>Yii::$app->user->isGuest],
//            ['label' => Yii::t('frontend', 'Login'), 'url' => ['/user/sign-in/login'], 'visible'=>Yii::$app->user->isGuest],
//            [
//                'label' => Yii::$app->user->isGuest ? '' : Yii::$app->user->identity->getPublicIdentity(),
//                'visible'=>!Yii::$app->user->isGuest,
//                'items'=>[
//                    [
//                        'label' => Yii::t('frontend', 'Settings'),
//                        'url' => ['/user/default/index']
//                    ],
//                    [
//                        'label' => Yii::t('frontend', 'Backend'),
//                        'url' => Yii::getAlias('@backendUrl'),
//                        'visible'=>Yii::$app->user->can('manager')
//                    ],
//                    [
//                        'label' => Yii::t('frontend', 'Logout'),
//                        'url' => ['/user/sign-in/logout'],
//                        'linkOptions' => ['data-method' => 'post']
//                    ]
//                ]
//            ],
//            [
//                'label'=>Yii::t('frontend', 'Language'),
//                'items'=>array_map(function ($code) {
//                    return [
//                        'label' => Yii::$app->params['availableLocales'][$code],
//                        'url' => ['/site/set-locale', 'locale'=>$code],
//                        'active' => Yii::$app->language === $code
//                    ];
//                }, array_keys(Yii::$app->params['availableLocales']))
//            ]
//        ]
//    ]);

    ?>
<?php // NavBar::end();  ?>

<?php echo $content ?>

</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?php echo date('Y') ?></p>
        <p class="pull-right"><?php echo Yii::powered() ?></p>
    </div>
</footer>
<?php $this->endContent() ?>