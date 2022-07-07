<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KeDesa - Beranda</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('/'); ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url('/'); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="<?= base_url('/'); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link href="<?= base_url('/'); ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('/'); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('/'); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('/'); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('/'); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('/'); ?>assets/css/style.css" rel="stylesheet">

    <script src="<?= base_url('/'); ?>assets/js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>

    <style type="text/css">
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
    </style>
    <!-- =======================================================
  * Template Name: KeDesa - v3.2.0
  * Template URL: https://bootstrapmade.com/KeDesa-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <img class="logo-tl" src="assets/img/kedesa.png" />
            <h1 class="logo me-auto"><a href="<?= base_url('/'); ?>beranda">KeDesa<span>.</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="<?= base_url('/'); ?>beranda">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('/'); ?>beranda#about">Tentang Kami</a></li>
                    <li><a href="<?= base_url('/'); ?>berita">Berita</a></li>
                    <li class="dropdown"><a href="#"><span>Halaman</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('/'); ?>struktur">Stuktur Organisasi</a></li>
                            <li><a class="active" href="<?= base_url('/'); ?>galeri">Galeri</a></li>
                            <li><a href="<?= base_url('/'); ?>lokasi">Lokasi</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="<?= base_url('/'); ?>beranda#contact">Masukan</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="<?= base_url('/'); ?>auth" class="get-started-btn scrollto">Login</a>
        </div>
    </header><!-- End Header -->

    <!-- ====== Main ====== -->
    <main id="main">
        <section id="galeri">
            <div class="container mt-5" data-aos="fade-up">

                <!-- #region Jssor Slider Begin -->
                <!-- Generator: Jssor Slider Composer -->
                <!-- Source: https://www.jssor.com/demos/full-width-slider.slider/=edit -->
                <script type="text/javascript">
                    window.jssor_1_slider_init = function() {

                        var jssor_1_SlideoTransitions = [];

                        var jssor_1_options = {
                            $AutoPlay: 1,
                            $LazyLoading: 1,
                            $CaptionSliderOptions: {
                                $Class: $JssorCaptionSlideo$,
                                $Transitions: jssor_1_SlideoTransitions
                            },
                            $ArrowNavigatorOptions: {
                                $Class: $JssorArrowNavigator$
                            },
                            $BulletNavigatorOptions: {
                                $Class: $JssorBulletNavigator$,
                                $SpacingX: 20,
                                $SpacingY: 20
                            }
                        };

                        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                        /*#region responsive code begin*/

                        var MAX_WIDTH = 1600;

                        function ScaleSlider() {
                            var containerElement = jssor_1_slider.$Elmt.parentNode;
                            var containerWidth = containerElement.clientWidth;

                            if (containerWidth) {

                                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                                jssor_1_slider.$ScaleWidth(expectedWidth);
                            } else {
                                window.setTimeout(ScaleSlider, 30);
                            }
                        }

                        ScaleSlider();

                        $Jssor$.$AddEvent(window, "load", ScaleSlider);
                        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                        /*#endregion responsive code end*/
                    };
                </script>
                <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
                <style>
                    /* jssor slider loading skin spin css */
                    .jssorl-009-spin img {
                        animation-name: jssorl-009-spin;
                        animation-duration: 1.6s;
                        animation-iteration-count: infinite;
                        animation-timing-function: linear;
                    }

                    @keyframes jssorl-009-spin {
                        from {
                            transform: rotate(0deg);
                        }

                        to {
                            transform: rotate(360deg);
                        }
                    }


                    /*jssor slider bullet skin 132 css*/
                    .jssorb132 {
                        position: absolute;
                    }

                    .jssorb132 .i {
                        position: absolute;
                        cursor: pointer;
                    }

                    .jssorb132 .i .b {
                        fill: #fff;
                        fill-opacity: 0.8;
                        stroke: #000;
                        stroke-width: 1600;
                        stroke-miterlimit: 10;
                        stroke-opacity: 0.7;
                    }

                    .jssorb132 .i:hover .b {
                        fill: #000;
                        fill-opacity: .7;
                        stroke: #fff;
                        stroke-width: 2000;
                        stroke-opacity: 0.8;
                    }

                    .jssorb132 .iav .b {
                        fill: #000;
                        stroke: #fff;
                        stroke-width: 2400;
                        fill-opacity: 0.8;
                        stroke-opacity: 1;
                    }

                    .jssorb132 .i.idn {
                        opacity: 0.3;
                    }

                    .jssora051 {
                        display: block;
                        position: absolute;
                        cursor: pointer;
                    }

                    .jssora051 .a {
                        fill: none;
                        stroke: #fff;
                        stroke-width: 360;
                        stroke-miterlimit: 10;
                    }

                    .jssora051:hover {
                        opacity: .8;
                    }

                    .jssora051.jssora051dn {
                        opacity: .5;
                    }

                    .jssora051.jssora051ds {
                        opacity: .3;
                        pointer-events: none;
                    }
                </style>

                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1400px;height:760px;overflow:hidden;visibility:hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1400px;height:760px;overflow:hidden;">
                        <div>
                            <img data-u="image" style="object-fit:cover" data-src="<?= base_url('/'); ?>assets/img/hero-bg.jpg" />
                        </div>
                        <div>
                            <img data-u="image" style="object-fit:cover" data-src="<?= base_url('/'); ?>assets/img/hero-bg1.jpg" />
                        </div>
                        <div>
                            <img data-u="image" style="object-fit:cover" data-src="<?= base_url('/'); ?>assets/img/tabs-1.jpg" />
                        </div>
                        <div>
                            <img data-u="image" style="object-fit:cover" data-src="<?= base_url('/'); ?>assets/img/tabs-2.jpg" />
                        </div>
                        <div>
                            <img data-u="image" style="object-fit:cover" data-src="<?= base_url('/'); ?>assets/img/tabs-3.jpg" />
                        </div>
                        <div>
                            <img data-u="image" style="object-fit:cover" data-src="<?= base_url('/'); ?>assets/img/tabs-4.jpg" />
                        </div>
                    </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>
                    <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                        <div data-u="prototype" class="i" style="width:12px;height:12px;">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" style="stroke: lightgray;" points="11040,1920 4960,8000 11040,14080 "></polyline>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" style="stroke: lightgray;" points="4960,1920 11040,8000 4960,14080 "></polyline>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-8 footer-contact">
                        <h3>KeDesa<span>.</span></h3>
                        <p>
                            Rekayasa Perangkat Lunak <br>
                            Web Aplikasi<br>
                            Kelompok 1 <br><br>
                            <strong>Phone:</strong> +6289921231223<br>
                            <strong>Email:</strong> kedesa@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-8 footer-links">
                        <h4>Pintasan</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('/'); ?>berita">Berita</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-5 col-md-8 footer-newsletter">
                        <h4>Berlangganan</h4>
                        <p>Masukan email Anda untuk menerima informasi terbaru KeDesa</p>
                        <form action="" method="post">
                            <input type="email" name="email" width="auto"><input type="submit" value="Mulai berlangganan">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>KeDesa</span></strong>. Hak cipta dilindungi undang-undang
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/KeDesa-bootstrap-corporate-template/ -->
                    Di desain oleh <a href="<?= base_url('/'); ?>kelompok1.html">Kelompok 1 Rekayasa Perangkat Lunak</a>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('/'); ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url('/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('/'); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('/'); ?>assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url('/'); ?>assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url('/'); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- Template Main JS File -->
    <script src="<?= base_url('/'); ?>assets/js/main.js"></script>
    <script type="text/javascript">
        jssor_1_slider_init();
    </script>
</body>

</html>