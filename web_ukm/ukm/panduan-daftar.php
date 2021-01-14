<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="homepage-ukm/style.css">
  <script src="../jquery/jquery-3.4.1.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <title>Sistem Informasi Pendaftaran Unit Kegiatan Mahasiswa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><img src="gambar/logo-gabung.png"></h1>
     
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="../../assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="../index">Home</a></li>
          <li><a href="../index#ukm">UKM</a></li>
          <li><a href="form-pendaftaran">Pendaftaran</a></li>
          <?php
          session_start();
          if (isset($_SESSION['status'])){
            if ($_SESSION['status'] == 'Login') {
            ?>
            <li class="active"><a href="profile-mhs">Halo <?php echo $_SESSION['nama_mhs']; ?></a></li>
            <li><a href="logout">Logout</a></li>
            <?php
            }
          }else{
          ?>
          <li><a href="login">Login</a></li>
          <?php
          }
          ?>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../index">Home</a></li>
          <li>Panduan Daftar</li>
        </ol>
        <h2>Panduan Daftar</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container" data-aos="fade-up">
        <h5>
          <ol>
            <li>Klik Login pada navbar</li>
            <li>Jika Belum Mempunyai Akun, Silahkan Klik <a href="register">Daftar Disini</a></li>
            <li>Masukkan Data dengan Benar,  Perhatikan Hal-Hal Berikut</li>
              <ul>
                <li>NIM yang dimasukkan harus benar karena tidak dapat diubah</li>
                <li>Username dan Password digunakan hanya untuk Login ke dalam website</li>
                <li>Data yang diisi akan digunakan untuk mendaftar UKM</li>
              </ul>
            <li>Jika sudah mendaftar, Login menggunakan Username dan Password yang telah didaftarkan</li>
            <li>Setelah Login, Klik menu Pendaftaran pada navbar</li>
            <li>Setiap Mahasiswa maksimal dapat mendaftar 2 Unit Kegiatan Mahasiswa</li>
            <li>Data yang terkirim adalah identitas mahasiswa yang telah didaftarkan serta pilihan UKM</li>
            <li>Tunggu Konfirmasi dari pihak UKM melalui WhatsApp</li>
          </ol>
        </h5>
      </div>
    </section>

    <!-- data ukm -->
    <section class="service section-bg">
      <div class="container" data-aos="fade-up">
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 footer-contact">
            <h3>Sistem Informasi Pendaftaran Unit Kegiatan Mahasiswa</h3>
            <h4>POLITEKNIK NEGERI JEMBER</h4>
            <p>
              <i class="icofont-google-map"></i> Jl. Mastrip 164, Jember<br>
              <i class="icofont-phone"></i> (0331) 333532<br>
              <i class="icofont-envelope"></i> politeknik@polije.ac.id <br>
            </p>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
          </div>
          <div class="col-lg-4 col-md-6 footer-links">
            <img src="gambar/logo-gabungan.png" width="350" height="180">
          </div>
        </div>
      </div>
    </div>
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Kelompok 18</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>