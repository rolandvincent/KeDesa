<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KeDesa - Berita</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento - v3.2.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
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
      <!-- <a href="<?= base_url('/'); ?>beranda" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="<?= base_url('/'); ?>beranda">Beranda</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('/'); ?>beranda#about">Tentang Kami</a></li>
          <li><a class="active" href="#">Berita</a></li>
          <li class="dropdown"><a href="#"><span>Halaman</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url('/'); ?>struktur">Stuktur Organisasi</a></li>
              <li><a href="<?= base_url('/'); ?>galeri">Galeri</a></li>
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

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url('/'); ?>beranda">Beranda</a></li>
          <li>Berita</li>
        </ol>
        <h2>Berita</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
            <?php $i = 1; ?>
            <?php foreach ($berita as $news) : ?>
              <article class="entry accordion">

                <h2 class="entry-title">
                  <a><?= $news['judul']; ?></a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i><?= $news['penulis']; ?></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2020-01-01"><?= date('d F Y', $news['tanggal']); ?></time></a></li>
                  </ul>
                </div>

                <div class="entry-content">
                  <?php if (strlen($news['isi']) > 200) { ?>
                    <div id="news<?= $i; ?>" class="collapse half-collapse" data-bs-parent=".entries">
                      <?= $news['isi']; ?>
                    </div>
                    <div class="read-more icon-show collapse-control">
                      <a href="#" data-bs-toggle="collapse" class="collapsed mt-2" data-bs-target="#news<?= $i++; ?>"></a>
                    </div>
                  <?php } else { ?>
                    <div>
                      <?= $news['isi']; ?>
                    </div>
                  <?php } ?>
                </div>

              </article><!-- End blog entry -->
            <?php endforeach; ?>
            <?php if (count($berita) == 0) : ?>
              <p class="text-center">Tidak ada berita</p>
            <?php endif; ?>
            <div class="blog-pagination mb-2">
              <ul class="justify-content-center">
                <?php for ($i = 1; $i <= $total; $i++) : ?>
                  <li <?php
                      if (($i == $current) || (!is_numeric($current) && $i == 1)) {
                        echo 'class="active"';
                      }
                      ?>><a href="#" data-page="<?= $i; ?>"><?= $i; ?></a></li>
                <?php endfor; ?>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Cari</h3>
              <div class="sidebar-item search-form">
                <form action="<?= base_url('/berita') ?>" method="GET">
                  <input name="search" type="text" id="search" value="<?= $search == null ? "" : html_escape($search) ?>">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Tanggapan</h3>
              <div class="sidebar-item">
                <?php foreach ($tanggapan as $t) : ?>
                  <div class="post-item clearfix mb-1 card">
                    <div class="card-body">
                      <span class="disp-block"><b>Anonim : </b></span>
                      <span class="ml-1"><?= $t['isi']; ?></span>
                      <span class="disp-block"><b>Jawab : </b></span>
                      <span class="ml-1"><?= $t['komentar']; ?></span>
                      <div class="text-muted"><time class="disp-block" datetime="2020-01-01="><?= date("j F Y, g:i a", strtotime($t['edited'])); ?></time></div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>KeDesa<span>.</span></h3>
            <p>
              Rekayasa Perangkat Lunak <br>
              Web Aplikasi<br>
              Kelompok 1 <br><br>
              <strong>Phone:</strong> +6289921231223<br>
              <strong>Email:</strong> kedesa@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Pintasan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('/'); ?>beranda#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('/'); ?>beranda#about">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Berita</a></li>
            </ul>
          </div>

          <div class="col-lg-5 col-md-6 footer-newsletter">
            <h4>Berlangganan</h4>
            <p>Masukan email Anda untuk menerima informasi terbaru KeDesa</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Mulai berlangganan">
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
          Di desain oleh <a href="kelompok1.html">Kelompok 1 Rekayasa Perangkat Lunak</a>
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
  <script src="<?= base_url('/'); ?>assets/vendor/purecounter/purecounter.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="<?= base_url('/'); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('/assets/'); ?>vendor/jquery/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('/'); ?>assets/js/main.js"></script>
  <script>
    $('a[data-page]').on('click', function() {
      const page = $(this).data('page');
      const search = $('#search').val();

      if (search == '') {
        window.location = "<?= base_url('/berita'); ?>?p=" + page;
      } else {
        window.location = "<?= base_url('/berita'); ?>?p=" + page + "&search=" + encodeURI(search);
      }
    });

    $(window).ready(() => {
      $('table').addClass('table');
      $('table').addClass('table-bordered');
    });
  </script>

</body>

</html>