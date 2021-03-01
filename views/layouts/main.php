<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Layout Begin -->
<div class="main-grid-wrapper">

    <!-- Layout Header Begin -->
    <header class="header-wg">
        <div class="container">
            <div class="logo">
                <a href="#" rel="home">
                    <img src="./images/layout/logo.png">
                </a>
            </div>

            <nav class="main-menu">
                    <ul>
                        <li class="active">
                            <a href="#">Solutions</a>
                            <ul>
                                <li>
                                    <a href="#">For buyers</a>
                                </li>
                                <li>
                                    <a href="#">For publishers</a>
                                </li>
                                <li>
                                    <a href="#">Managed services</a>
                                </li>
                                <li>
                                    <a href="#">Referral program</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>

                    </ul>
                </nav>

            <div class="header-wg__buttons">
                <button >Sign in</button>
                <button >Log in</button>
            </div>
            <a class="hamburger">
                <div class="hamburger__line"></div>
                <div class="hamburger__line"></div>
                <div class="hamburger__line"></div>
            </a>

        </div>
    </header>
    <!-- Layout Header EOT -->

    <!-- Layout Content Begin -->
    <div class="content-wg">

        <!-- Page content insert here -->
        <?= $content ?>

    </div>
    <!-- Layout Content EOT -->

    <!-- Layout Footer Begin -->
    <footer class="footer-wg">
        <div class="circles">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
        <div class="container">
            <div class="wrapper-main">
                <div class="footer-wg__menu">
                    <div class="item">
                        <div class="title">
                            Solutions
                        </div>
                        <ul>
                            <li>
                                <a href="#">For buyers</a>
                            </li>
                            <li>
                                <a href="#">Managed services</a>
                            </li>
                            <li>
                                <a href="#">For publishers</a>
                            </li>
                            <li>
                                <a href="#">Referral program</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="title">
                            Resources
                        </div>
                        <ul>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>
                                <a href="#">Terms and Conditions</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy & GDPR</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="title">
                            Get in touch
                        </div>
                        <ul>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <a href="#" class="footer-wg__logo" rel="home">
                <img src="./images/layout/footer-logo.png">
            </a>
        </div>

    </footer>
    <!-- Layout Footer EOT -->

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
