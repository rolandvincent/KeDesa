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
                            <li><a href="<?= base_url('/'); ?>galeri">Galeri</a></li>
                            <li><a class="active" href="<?= base_url('/'); ?>lokasi">Lokasi</a></li>
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
        <section id="lokasi">
            <div class="container" data-aos="fade-up">
                <h4 class="mt-5">Lokasi KeDesa</h4>
                <div id="map"></div>

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
    <!-- External JS File -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjI9VxqjSpJiJeF1HPfw6GKBJ9w5bq9i8&callback=initMap&libraries=&v=weekly" async></script>

    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            const uluru = {
                lat: -0.641043,
                lng: 117.103779
            };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 10,
                center: uluru,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
        }

        initMap();
    </script>

</body>

</html>