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
          <li><a class="nav-link scrollto" href="<?= base_url('/'); ?>berita">Berita</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li class="dropdown"><a href="#"><span>Halaman</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url('/'); ?>struktur">Stuktur Organisasi</a></li>
              <li><a href="<?= base_url('/'); ?>galeri">Galeri</a></li>
              <li><a href="<?= base_url('/'); ?>lokasi">Lokasi</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Masukan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="<?= base_url('/'); ?>auth" class="get-started-btn scrollto">Login</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Baca berita terkini hanya di KeDesa</h1>
          <h2>Kami menyediakan informasi berita secara terkini</h2>
          <a href="<?= base_url(); ?>/berita" class="btn-get-started scrollto">Baca Sekarang</a>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>Program KeDesa</h3>
              <p>
                KeDesa merupakan sebuah program yang bertujuan menyampaikan aspirasi masyarakat. Kami membantu pengembangan desa agar masyarakat mendapat pengalaman yang lebih baik.
              </p>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4><a href="<?= base_url(); ?>/berita" style="color:coral">Berita Terbaru</a></h4>
                  <p>Merupakan fasilitas KeDesa untuk melihat program dan berita terkini</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4><a href="<?= base_url('/') ?>struktur" style="color:coral">Struktur Organisasi</a></h4>
                  <p>Struktur organisasi jabatan staff Desa</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4><a href="<?= base_url('/') ?>galeri" style="color:coral">Galeri</a></h4>
                  <p>Dokumentasi kegiatan Desa</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="fas fa-map-marker-alt"></i>
                  <h4><a href="<?= base_url('/') ?>lokasi" style="color:coral">Lokasi</a></h4>
                  <p>Lokasi Desa</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pertanyaan yang sering diajukan</h2>
        </div>

        <ul class="faq-list accordion" data-aos="fade-up">

          <li>
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Apa itu KeDesa? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                KeDesa merupakan sebuah program yang bertujuan menyampaikan aspirasi masyarakat. Kami membantu pengembangan desa agar masyarakat mendapat pengalaman yang lebih baik.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Bagaimana cara memberi masukan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Pada halaman utama klik masukan, lalu : <br>
                1. Masukan Nama Lengkap<br>
                2. Masukan NIK<br>
                3. Tuliskan apa yang ingin disampaikan, selesai.<br>
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Apakah KeDesa program resmi pemerintah? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Sejauh ini KeDesa belum menjadi program pemerintah.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Bagaimana cara menghubungi pihak Desa? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Untuk menghubungi pihak Desa bisa melalui Facebook, Twitter, Instagram, dan WhatsApp. Silahkan klik <a style="display: inline;" href="#footer">Kontak.</a>
              </p>
            </div>
          </li>


        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Masukan</h2>
          <p>Isi masukan berupa kritik dan saran untuk membantu pengembangan desa.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <!-- <div class="col-lg-6"> -->

          <!-- <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div> -->

          <div class="col-lg-12">
            <form action="<?= base_url('/') ?>action?i=1" method="post" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK Anda" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Masukan" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Harap tunggu</div>
                <div class="error-message"> </div>
                <div class="sent-message">Pesan Anda telah terkirim. Terima Kasih!</div>
              </div>
              <?= flashdata('home'); ?>
              <div class="text-center"><button type="submit">Kirim Masukan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
            <form action="<?= base_url('/') ?>action?i=2" method="post">
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

</body>

</html>