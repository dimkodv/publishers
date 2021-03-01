<?php

/* @var $this yii\web\View */

use app\assets\AppAsset;
use app\assets\OwlCarouselAsset;
use app\widgets\registrationForm\RegistrationFormWidget;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Publishers';

OwlCarouselAsset::register($this);
$this->registerCssFile('@web/stylesheet/css/pages/main-page.css', ['depends' => [AppAsset::class]]);
$this->registerJsFile('@web/js/index-page.js', ['depends' => [AppAsset::class]]);
$this->registerJsFile('@web/js/popup.js', ['depends' => [AppAsset::class]]);
?>

<section class="section-top">
    <div class="container">
        <div class="title">
            Publishers
        </div>
        <div class="wrapper-main">
            <div class="text">
                <div class="text-top">
                    Get paid for what you love - <br/>
                    creating and placing content
                </div>
                <div class="text-form">
                    <?php echo RegistrationFormWidget::widget(['formName' => '1']); ?>
                </div>
                <p>
                    By signing up, you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section-how">
    <div class="container">
        <div class="head head--lineLeft">
            <span class="lazyClass">How It Works</span>
        </div>
        <div class="block">
            <div class="items">
                <div class="item lazyClass">
                    <div class="image">
                        <img src="./images/main-page/section-how/1.png" alt="img">
                    </div>
                    <p>Add your platform, verify your ownership and pass moderation</p>
                    <span>1</span>
                </div>
                <div class="item lazyClass">
                    <div class="image">
                        <img src="./images/main-page/section-how/2.png" alt="img">
                    </div>
                    <p>Get tasks to do by getting offers from buyers</p>
                    <span>2</span>
                </div>
                <div class="item lazyClass">
                    <div class="image">
                        <img src="./images/main-page/section-how/3.png" alt="img">
                    </div>
                    <p>Create and place content
                        on your platforms</p>
                    <span>3</span>
                </div>
                <div class="item lazyClass">
                    <div class="image">
                        <img src="./images/main-page/section-how/4.png" alt="img">
                    </div>
                    <p>Get paid for your
                        amazing work</p>
                    <span>4</span>
                </div>
            </div>
            <div class="bottom">
                <button class="start-earning lazyClass">Start earning now</button>
            </div>
        </div>

    </div>
</section>

<section class="section-what">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="container">
        <div class="head head--lineRight">
            <span class="lazyClass">
                What You Get <br/>
                Using Adsy
            </span>
        </div>
        <div class="block">
            <div class="photo lazyClass"></div>
            <div class="slider-wrap">
                <div class="section-what__line section-what__line--left"></div>
                <div class="section-what__line section-what__line--right"></div>
                <div class="slider">
                    <div class="items">
                        <div class="item">
                            <div class="title">
                                Website <br/>
                                monetization
                            </div>
                            <p>
                                Get decent remuneration for your work: content placement or content creation and placement.
                            </p>
                        </div>
                        <div class="item">
                            <div class="title">
                                Free unique and relevant content
                                for your website
                            </div>
                            <p>
                                Get unique and relevant content from buyers. Then get paid for placing it on your website. Thus, win twice!
                            </p>
                        </div>
                        <div class="item">
                            <div class="title">
                                Quote prices for
                                your services
                            </div>
                            <p>
                                Set the desired prices for your services while filling up a form to be added in Adsy inventory.
                            </p>
                        </div>
                        <div class="item">
                            <div class="title">
                                Higher rankings for quality and frequently updated content
                            </div>
                            <p>
                                Quality and relevant sponsored content will increase your website position in search engines and grow traffic.
                            </p>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item">
                            <div class="title">
                                100% control over the content placed on your site
                            </div>
                            <p>
                                Accept or reject tasks from buyers to control the content that will be placed on your website.
                            </p>
                        </div>
                        <div class="item">
                            <div class="title">
                                Absence of intrusive <br/>
                                advertising
                            </div>
                            <p>
                                There is no need in annoying ads to monetize your website. Write content you are interested in and get profit.
                            </p>
                        </div>
                        <div class="item">
                            <div class="title">
                                Sponsorship disclosure to keep your readers' trust
                            </div>
                            <p>
                                Use disclosure to mark sponsored content and show transparent and honest attitude to your website visitors.
                            </p>
                        </div>
                        <div class="item">
                            <div class="title">
                                Opportunity to clarify any task requirements
                            </div>
                            <p>
                                Quality and relevant sponsored content will increase your website position in search engines and grow traffic.
                            </p>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item">
                            <div class="title">
                                Guaranteed <br/>
                                payment
                            </div>
                            <p>
                                Task payment is reserved, once you have been approved as a task performer. So, after proper task completion you are guaranteed to get paid.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <button class="start-earning lazyClass">Start earning now</button>
                </div>
            </div>

        </div>

    </div>
</section>

<div class="popup-wg">
    <div class="popup-wg__block">
        <span class="popup-wg__close"></span>

        <div class="popup-wg__content">
            <!-- Insert dynamic content here -->

            <!-- Popup content begin -->
            <div class="title">
                Sign Up and Get a FREE Bonus
            </div>
                <div class="popup-text">
                    <div class="popup-text__seo">
                        SEO Checklist
                        «How to Build
                        Profitable &
                        Successful
                        Website»
                    </div>
                    <div class="popup-text__form">
                        <?php echo RegistrationFormWidget::widget(['formName' => '2']); ?>

                        <div class="signup-google">
                            <span>
                                Or Sign up
                                with Google:
                            </span>
                            <a href="#">
                                <svg enable-background="new 0 0 32 32" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Flat_copy">
                                    <g>
                                        <path class="signup-google__circle" d="M16-0.01c-8.837,0-16,7.163-16,16c0,8.836,7.163,16,16,16s16-7.164,16-16C32,7.153,24.837-0.01,16-0.01z" fill="#333333"/>
                                    </g>
                                    <path class="signup-google__g" d="M24.477,14.334c0.111,0.59,0.171,1.209,0.171,1.854c0,5.044-3.377,8.631-8.476,8.631   c-4.878,0-8.83-3.952-8.83-8.83s3.952-8.83,8.83-8.83c2.384,0,4.376,0.877,5.905,2.301l-2.489,2.489v-0.006   c-0.927-0.883-2.102-1.336-3.416-1.336c-2.914,0-5.281,2.461-5.281,5.375c0,2.913,2.368,5.381,5.281,5.381   c2.644,0,4.442-1.512,4.813-3.587h-4.813v-3.444L24.477,14.334L24.477,14.334z" fill="#FFFFFF"/>
                                </g>
                            </svg>
                            </a>
                        </div>
                        <p class="signup-p">
                            By signing up, you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                        </p>
                    </div>
                </div>
            <!-- Popup content end -->

        </div>
    </div>
</div>