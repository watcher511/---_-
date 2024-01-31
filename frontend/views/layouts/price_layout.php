<?php

/**
 * Team:对影成三人队
 * By wukui
 * layout for price
 */

/* @var $this View */
/* @var $content string */

use yii\helpers\Html;
use yii\web\View;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo d-flex align-items-center">
            <img src="<?="../web/statics/assets/img/logo.png"?>" alt="">
            <span>Environment Protection</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="index.php#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="index.php#news">News</a></li>
                <li><a class="nav-link scrollto" href="index.php#past">Past</a></li>
                <li><a class="nav-link scrollto" href="index.php#opinions">Opinions</a></li>
                <li><a class="nav-link scrollto active" href="index.php#pricing">Price</a></li>
                <li><a class="nav-link scrollto" href="index.php#faq">FAQ</a></li>
                <li><a class="nav-link scrollto" href="index.php#team">Team</a></li>
                <!-- biandi -->
                <!-- <li><a class="getstarted scrollto" href="#about">Login</a></li> -->
                <?php  if (Yii::$app->user->isGuest) { ?>

                    <?= Html::a('Login', ['site/login'],['class'=>'getstarted scrollto']) ?>

                <?php } else { ?>

                    <li class="nav-link scrollto">
                        <?= Html::beginForm(['/site/logout'], 'post') ?>
                        <?= Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn',
                                'style' =>
                                    'display: flex;
              align-items: center;
              justify-content: space-between;
              font-family: "Nunito", sans-serif;
              font-size: 16px;
              font-weight: 700;
              color: #013289;
              white-space: nowrap;

              background: #4154f1;
              padding: 8px 20px;
              margin-left: 30px;
              border-radius: 4px;
              color: #fff;']) ?>
                        <!-- <?= Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')',['class' => 'btn-logout']) ?> -->
                        <?= Html::endForm() ?>
                    </li>

                <?php }  ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<?= $content ?>

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h4>向我们提问</h4>
                    <p>请在下方留言或提问</p>
                </div>
                <div class="col-lg-6">
                    <?= Html::beginForm('@web/index.php?r=ask%2Fask','post') ?>
                    <input type="text" class="form-control" name="question" >
                    <input type="submit" value="提交">
                    <?= Html::endForm() ?>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>对影成三人队</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
 
            Template from <a href="https://bootstrapmade.com/">BootstrapMade</a>. Powered by <a href="https://www.yiichina.com/">Yii2</a>
        </div>
    </div>
</footer><!-- End Footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>