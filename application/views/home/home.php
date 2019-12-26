<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Stream - Bootstrap 4 UI Kit</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Stream - Bootstrap 4 UI Kit">
    <meta name="author" content="htmlstream.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,700%7COpen+Sans:300,400,700" rel="stylesheet">

    <!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('stream-ui-kit/') ?>assets/vendors/bootstrap/css/bootstrap.min.css">

    <!-- Components Vendor Styles -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('stream-ui-kit/') ?>assets/vendors/font-awesome/css/fontawesome-all.min.css">

    <!-- Theme Styles -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('stream-ui-kit/') ?>assets/css/styles.css">

    <!-- Demo Custome Code (demo page only) -->
    <style type="text/css">
        /* Button Spaces*/
        .demo-btn-space .btn,
        .demo-progress-space .progress {
            margin-bottom: 10px;
        }

        /* About Section */
        .demo-about-section {
            position: relative;
            padding-top: 6.25rem;
        }

        @media (min-width: 991px) {
            .demo-about-section {
                margin-top: -50px;
                padding-top: 0;
            }
        }

        /* Download Section */
        .demo-download-section {
            position: relative;
            z-index: 1;
            margin: -60px 0;
        }

        /* Google Fonts */
        .demo-fonts-box {
            padding: 30px;
            line-height: 2;
            letter-spacing: 2px;
        }

        .demo-fonts-box__item {
            line-height: 1;
        }

        .demo-fonts-box__item-xs {
            line-height: 1;
            font-size: 30px;
        }

        .demo-fonts-box__item-xl {
            line-height: 1;
            font-size: 90px;
        }

        .navbar-bg-onscroll.fixed-top {
            background-color: #363438;
            transition: all .3s ease-out;
        }
    </style>
    <!-- End Demo Custome Code (demo page only) -->
</head>
<!-- End Head -->
<?php
$status_lunas = null;
if ($master['pelunasan'] == 1) {
    $status_lunas = 'TUNAI';
} elseif ($master['pelunasan'] == 2) {
    $status_lunas = 'TRANSFER';
}
?>

<body id="js-home">
    <!-- Header -->
    <header role="header">
        <!-- Navbar -->
        <nav class="js-navbar-scroll navbar fixed-top navbar-expand-lg navbar-transparent navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="<?= base_url('stream-ui-kit/') ?>assets/img/logo-white.png" alt="Stream UI Kit" style="width: 100px;">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active mx-2">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Our Work</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Contacts</a>
                        </li>
                    </ul>

                    <ul class="ml-auto navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle u-box-shadow-sm mr-2" width="35" height="35" src="<?= base_url('stream-ui-kit/') ?>assets/img-temp/ava/img3.jpg" alt="Htmlstream"> Poetra <i class="fas fa-angle-down small ml-1"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Account Settings</a>
                                <a class="dropdown-item" href="#">Newsletter</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Sign Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Promo Block -->
        <section class="js-parallax u-promo-block" style="background-image: url(stream-ui-kit/assets/img-temp/promo/img1.jpg);">
            <!-- Promo Content -->
            <div class="container text-white u-ver-center u-content-space">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="text-center">
                            <p class="h6 text-uppercase u-letter-spacing-sm mb-0">Merenung arti dari tiap langkah yang di tapaki</p>
                            <h1 class="display-2 display-md-1 u-font-accent font-weight-light">Jejak <span class="d-none d-md-inline-block">-</span> Langkah</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Promo Content -->
        </section>
        <!-- End Promo Block -->
    </header>
    <!-- End Header -->

    <main role="main">

        <!-- Carousel -->
        <section class="u-content-space-bottom">
            <div class="container">
                <header class="w-md-50 mx-auto text-center mb-7">
                    <h2 class="h1 font-weight-light mb-1">Bootstrap Carousel</h2>
                    <p>We have used default Bootstrap Carousel in Stream UI Kit. Find out more detailed information abou it <a target="_blank" href="https://getbootstrap.com/docs/4.1/components/carousel/">here</a>.</p>
                </header>

                <!-- Carousel -->
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div id="carouselExampleIndicators" class="carousel slide bg-light u-box-shadow-lg" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="rounded active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="rounded"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="rounded"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 rounded" src="<?= base_url('stream-ui-kit/') ?>assets/img-temp/1920x1080/img1.jpg" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="h2 font-weight-light mb-0">Stream UI Kit</h5>
                                        <p class="lead">Forever Free, Open Source, Easy to Use!</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100 rounded" src="<?= base_url('stream-ui-kit/') ?>assets/img-temp/1920x1080/img2.jpg" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="h2 font-weight-light mb-0">Stream UI Kit</h5>
                                        <p class="lead">Forever Free, Open Source, Easy to Use!</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100 rounded" src="<?= base_url('stream-ui-kit/') ?>assets/img-temp/1920x1080/img9.jpg" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="h2 font-weight-light mb-0">Stream UI Kit</h5>
                                        <p class="lead">Forever Free, Open Source, Easy to Use!</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span aria-hidden="true">
                                    <i class="fas fa-angle-left carousel-control-size"></i>
                                </span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span aria-hidden="true">
                                    <i class="fas fa-angle-right carousel-control-size"></i>
                                </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Carousel -->
            </div>
        </section>
        <!-- End Carousel -->

        <hr>

        <!-- Other Components -->
        <section class="u-content-space">
            <div class="container">
                <header class="w-md-50 mx-auto text-center mb-7">
                    <h2 class="h1 font-weight-light mb-1">Other Components</h2>
                    <p>All these components are based on Bootstrap and any other Bootstrap compoentns also can be used within
                        Stream UI Kit.</p>
                </header>

                <h3 class="h5 mb-3">Progress Bars</h3>

                <!-- Progress Bars -->

                <!-- End Pager -->

                <hr class="my-7">

                <h3 class="h5 mb-3">Images</h3>

                <!-- Images -->
                <div class="row">
                    <div class="col-sm-6 col-md-3 text-center mb-7 mb-md-0">
                        <img class="u-box-shadow-lg img-fluid rounded mt-1" src="<?= base_url('stream-ui-kit/') ?>assets/img-temp/intro/img1.jpg" alt="Htmlstream">
                    </div>
                    <div class="col-sm-6 col-md-3 text-center mb-7 mb-md-0">
                        <img class="u-box-shadow-lg img-fluid rounded-circle mt-1" src="<?= base_url('stream-ui-kit/') ?>assets/img-temp/intro/img1.jpg" alt="Htmlstream">
                    </div>
                    <div class="col-sm-6 col-md-3 text-center mb-7 mb-md-0">
                        <img class="u-box-shadow-lg img-fluid img-thumbnail mt-1" src="<?= base_url('stream-ui-kit/') ?>assets/img-temp/intro/img1.jpg" alt="Htmlstream">
                    </div>
                    <div class="col-sm-6 col-md-3 text-center">
                        <img class="u-box-shadow-lg img-fluid img-thumbnail rounded-circle mt-1" src="<?= base_url('stream-ui-kit/') ?>assets/img-temp/intro/img1.jpg" alt="Htmlstream">
                    </div>
                </div>
                <!-- End Images -->
            </div>
        </section>
        <!-- End Other Components -->

        <!-- Bonus Files -->
        <section class="js-parallax bg-light u-content-space" style="background-image: url(assets/img/bg-pattern.png);">
            <div class="container">
                <header class="w-md-50 mx-auto text-center mb-8">
                    <h2 class="h1 font-weight-light mb-1">Bonus Files</h2>
                    <p class="mb-4">Stream UI Kit includes all used images with a link to collection, SASS source files, gulp
                        sources for completely free as a bonus.</p>
                </header>

                <!-- Images -->
                <div class="row">
                    <div class="col-lg-5 align-self-center pr-lg-5 mb-5 mb-lg-0">
                        <h2 class="font-weight-light mb-3">Free Images</h2>
                        <p>All images are used from <strong class="text-primary">Unsplash</strong> and we included 100% all image
                            sources in our download pacakge. In addition, all images can be easliy accessed in our unsplash
                            collection.</p>
                        <p>Access all images used in Stream - UI Kit for free.</p>
                        <a class="btn btn-outline-primary" target="_blank" href="https://unsplash.com/collections/1572580/stream-ui-kit">
                            <i class="fas fa-camera mr-2"></i> Free Use &amp; Download
                        </a>
                    </div>

                    <div class="col-lg-7 order-first order-lg-last mb-4 mb-lg-0">
                        <!-- Mockup Browser -->
                        <figure>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 857 40" style="enable-background:new 0 0 857 40;" xml:space="preserve">
                                <g>
                                    <path style="fill: #fff;" d="M856.8,40.2H0.8V19c0-10.5,8.5-19,19-19h818c10.5,0,19,8.5,19,19V40.2z" />
                                </g>
                                <g>
                                    <ellipse style="fill: #fb4143;" cx="28.5" cy="20.1" rx="6" ry="6" />
                                    <ellipse style="fill: #fab633;" cx="48.4" cy="20.1" rx="6" ry="6" />
                                    <ellipse style="fill: #0dd157;" cx="68.4" cy="20.1" rx="6" ry="6" />
                                </g>
                            </svg>
                        </figure>
                        <!-- End Mockup Browser -->

                        <a target="_blank" href="https://unsplash.com/collections/1572580/stream-ui-kit">
                            <img class="img-fluid w-100 u-browser-img u-box-shadow-lg" src="<?= base_url('stream-ui-kit/') ?>assets/img-temp/bonus/stream-unsplash.jpg" alt="Unsplash Stream UI Kit Collection">
                        </a>
                    </div>
                </div>
                <!-- End Images -->

                <hr class="my-8">

                <!-- Icons -->
                <div class="row">
                    <div class="col-lg-7 mb-4 mb-lg-0">
                        <!-- Mockup Browser -->
                        <figure>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 857 40" style="enable-background:new 0 0 857 40;" xml:space="preserve">
                                <g>
                                    <path style="fill: #fff;" d="M856.8,40.2H0.8V19c0-10.5,8.5-19,19-19h818c10.5,0,19,8.5,19,19V40.2z" />
                                </g>
                                <g>
                                    <ellipse style="fill: #fb4143;" cx="28.5" cy="20.1" rx="6" ry="6" />
                                    <ellipse style="fill: #fab633;" cx="48.4" cy="20.1" rx="6" ry="6" />
                                    <ellipse style="fill: #0dd157;" cx="68.4" cy="20.1" rx="6" ry="6" />
                                </g>
                            </svg>
                        </figure>
                        <!-- End Mockup Browser -->

                        <a target="_blank" href="https://fontawesome.com/icons?d=gallery&m=free">
                            <img class="img-fluid w-100 u-browser-img u-box-shadow-lg" src="<?= base_url('stream-ui-kit/') ?>assets/img-temp/bonus/stream-icons.jpg" alt="Font Awesome Icons">
                        </a>
                    </div>

                    <div class="col-lg-5 align-self-center pl-lg-5">
                        <h2 class="font-weight-light mb-3">950+ Icons</h2>
                        <p>We used <strong class="text-primary">Font Awesome</strong> icons, the web’s most popular icon set and
                            toolkit. It includes over 950 free icons suitable for any needs.</p>
                        <p>Access to 950+ free icons used in Stream - UI Kit.</p>
                        <a class="btn btn-outline-primary" target="_blank" href="https://fontawesome.com/icons?d=gallery&m=free">
                            <i class="fab fa-font-awesome-flag mr-2"></i> Font Awesome Icons
                        </a>
                    </div>
                </div>
                <!-- End Icons -->

                <hr class="my-8">

                <!-- Modern Tools -->
                <div class="row u-content-space-bottom">
                    <div class="col-lg-5 align-self-center pr-lg-5 mb-5 mb-lg-0">
                        <h2 class="font-weight-light mb-3">Modern Toolkit</h2>
                        <p>Buit with modern tools and approaches. We have inlcuded all <strong class="text-primary">SASS</strong>
                            source files along with <strong class="text-primary">Gulp</strong> files. Change the primary color within
                            a single line and do more with the power of SASS.</p>
                        <p>Learn more how to intall and use these tools.</p>
                        <a class="btn btn-outline-primary" target="_blank" href="https://htmlstream.com/public/preview/stream-ui-kit/docs.html">
                            <i class="fas fa-book mr-2"></i> Read More in Docs
                        </a>
                    </div>

                    <div class="col-lg-7 order-first order-lg-last mb-4 mb-lg-0">
                        <!-- Mockup Browser -->
                        <figure>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 857 40" style="enable-background:new 0 0 857 40;" xml:space="preserve">
                                <g>
                                    <path style="fill: #fff;" d="M856.8,40.2H0.8V19c0-10.5,8.5-19,19-19h818c10.5,0,19,8.5,19,19V40.2z" />
                                </g>
                                <g>
                                    <ellipse style="fill: #fb4143;" cx="28.5" cy="20.1" rx="6" ry="6" />
                                    <ellipse style="fill: #fab633;" cx="48.4" cy="20.1" rx="6" ry="6" />
                                    <ellipse style="fill: #0dd157;" cx="68.4" cy="20.1" rx="6" ry="6" />
                                </g>
                            </svg>
                        </figure>
                        <!-- End Mockup Browser -->

                        <a target="_blank" href="https://htmlstream.com/public/preview/stream-ui-kit/docs.html">
                            <img class="img-fluid w-100 u-browser-img u-box-shadow-lg" src="<?= base_url('stream-ui-kit/') ?>assets/img-temp/bonus/stream-sources.jpg" alt="Unsplash Stream UI Kit Collection">
                        </a>
                    </div>
                </div>
                <!-- End Modern Tools -->
            </div>
        </section>
        <!-- End Bonus Files -->

        <!-- Free Download -->
        <section class="demo-download-section">
            <div class="js-parallax u-content-space u-box-shadow-lg bg-white rounded-md mx-3 mx-lg-5" style="background-image: url(assets/img/bg-pattern.png);">
                <div class="container">
                    <div class="text-center w-md-50 mx-auto py-5">
                        <a class="display-4 d-inline-block mb-3 text-dark" target="_blank" href="https://github.com/htmlstreamofficial/stream-ui-kit" data-toggle="tooltip" data-placement="top" title="Star on Github" data-original-title="Star stream-ui-kit on Github">
                            <i class="fab fa-github"></i>
                        </a>
                        <p class="lead font-weight-normal mb-5">All these completly FREE under MIT license. You can use <strong class="text-primary">Stream UI Kit</strong> even commercially!</p>
                        <a class="btn btn-primary u-box-shadow-lg py-3 px-4" href="https://htmlstream.com/templates/stream-ui-kit">
                            <i class="fas fa-cloud-download-alt mr-2"></i> Free Download Now
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Free Download -->
    </main>

    <!-- Footer -->
    <footer class="bg-dark u-content-space-top pb-4" role="footer">
        <div class="container-fluid">
            <div class="px-md-3">
                <!-- Social Sharing -->
                <div class="text-center">
                    <h2 class="h5 font-weight-light text-white mb-4">Sharing is caring, support us by just sharing.</h2>

                    <div class="d-flex justify-content-center">
                        <!-- Facebook Share -->
                        <div class="mr-3 mb-2 mb-md-0">
                            <div class="fb-share-button demo-faceook-share" data-href="http://facebook.com/htmlstream" data-layout="button" data-size="large" data-mobile-iframe="true">
                                <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a>
                            </div>
                        </div>
                        <!-- End Facebook Share -->

                        <!-- Google Plus -->
                        <div class="mr-3 mb-2 mb-md-0">
                            <div class="g-plus" data-action="share" data-annotation="bubble" data-height="52"></div>
                        </div>
                        <!-- End Google Plus -->

                        <!-- Tweet -->
                        <div class="mr-3">
                            <a href="https://twitter.com/intent/tweet" class="twitter-share-button" data-size="large" data-text="Stream UI Kit is beautiful Open Source Bootstrap 4 UI Kit under MIT license." data-hashtags="StreamUIKit, Bootstrap, Freebies" data-related="htmlstream, freebies, bootstrap">@htmlstream</a>
                        </div>
                        <!-- End Tweet -->
                    </div>
                </div>
                <!-- End Social Sharing -->

                <hr class="u-opacity-1 mb-4">
            </div>

            <!-- Copyright and Social Icons -->
            <div class="row px-md-3">
                <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
                    <small class="text-white">&copy; 2018 <a class="text-white" href="https://htmlstream.com">Htmlstream</a>. All
                        Rights Reserved.</small>
                </div>

                <div class="col-md-4 align-self-center">
                    <ul class="list-inline text-center text-md-right mb-0">
                        <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <a class="text-white" target="_blank" href="https://www.facebook.com/htmlstream">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
                            <a class="text-white" target="_blank" href="https://www.instagram.com/htmlstream">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <a class="text-white" target="_blank" href="https://twitter.com/htmlstream">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Dribbble">
                            <a class="text-white" target="_blank" href="https://dribbble.com/htmlstream">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Copyright and Social Icons -->
        </div>
    </footer>
    <!-- End Footer -->

    <!-- JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
    <!-- Global Vendor -->
    <script src="<?= base_url('stream-ui-kit/') ?>assets/vendors/jquery.min.js"></script>
    <script src="<?= base_url('stream-ui-kit/') ?>assets/vendors/jquery.migrate.min.js"></script>
    <script src="<?= base_url('stream-ui-kit/') ?>assets/vendors/popper.min.js"></script>
    <script src="<?= base_url('stream-ui-kit/') ?>assets/vendors/bootstrap/js/bootstrap.min.js"></script>

    <!-- Components Vendor  -->
    <script src="<?= base_url('stream-ui-kit/') ?>assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('stream-ui-kit/') ?>assets/vendors/jquery.parallax.js"></script>

    <!-- Theme Settings and Calls -->
    <script src="<?= base_url('stream-ui-kit/') ?>assets/js/global.js"></script>

    <!-- Theme Components and Settings -->
    <script src="<?= base_url('stream-ui-kit/') ?>assets/js/vendors/parallax.js"></script>
    <!-- END JAVASCRIPTS -->

    <!-- Demo Code Only -->
    <script>
        // Font Toggle
        $(document).on('ready', function() {
            $('.js-font-change-btn').click(function() {
                $('.js-font-change-btn__icon').toggleClass('fa-toggle-on');
                $('.js-font-content').toggleClass('u-font-accent');
                $('.js-font-content__chnage1').toggleClass('d-none');
                $('.js-font-content__chnage2').toggleClass('d-inline-block');
            });
        });
        // End Font Toggle

        // Facebook Like
        window.fbAsyncInit = function() {
            // init the FB JS SDK
            FB.init({
                appId: '1972702999621713',
                status: true,
                xfbml: true,
                version: 'v2.3'
            });
            if (typeof gaSocialTracking != 'undefined') gaSocialTracking.trackFacebook();
            setTimeout(function() {
                if (typeof window.fbCallback == 'function') {
                    window.fbCallback();
                }
            }, 3000); // to make sure FB was loaded
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        // Facebook Like

        // Twitter Follow
        window.twttr = (function(d, s, id) {
            var t, js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
            return window.twttr || (t = {
                _e: [],
                ready: function(f) {
                    t._e.push(f)
                }
            });
        }(document, "script", "twitter-wjs"));
        twttr.ready(function(twttr) {
            twttr.events.bind('tweet', function(event) {
                if (typeof gaSocialTracking != 'undefined') gaSocialTracking.trackTwitter();
            });
        });
        // Twitter Follow
    </script>
    <!-- End Demo Code Only -->

    <!-- Github and Google Plus Buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!-- End Github and Google Plus Buttons -->
</body>
<!-- End Body -->

</html>