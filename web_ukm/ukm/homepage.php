<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Pendaftaran UKM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><img src="gambar/logo-gabung.png"></h1>
     
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="homepage.php">Home</a></li>
          <li><a href="#ukm">UKM</a></li>
          <li><a href="form-pendaftaran.php">Pendaftaran</a></li>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-10 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>SISTEM INFORMASI PENDAFTARAN<br>UNIT KEGIATAN MAHASISWA</h1>
          <h2>POLITEKNIK NEGERI JEMBER</h2>
          <div class="d-lg-flex">
            <a href="#ukm" class="btn-get-started scrollto">Panduan Daftar</a>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= UKM Section ======= -->
    <section id="ukm" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Unit Kegiatan Mahasiswa</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <?php
          include 'koneksi.php';
          $data = mysqli_query($db, "SELECT * FROM tb_ukm");
          while ($a = mysqli_fetch_array($data)) {
        ?>
        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="homepage-ukm.php"><?php echo $a['nama_ukm']; ?></a></h4>
              <p><?php echo $a['deskripsi_ukm']; ?></p>
            </div>
          </div>
        </div>
        <br>
        <?php
        }
        ?>
          <!-- <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">E-CLUB</a></h4>
              <p>Unit Kegiatan Mahasiswa English-Club</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">RASPOL</a></h4>
              <p>Unit Kegiatan Mahasiswa Pramuka Racana Arjuna-Srikandi Gugusdepan Jember 02.155-02.156 Pangkalan Politeknik Negeri Jember</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">ROBOTIKA IR-64</a></h4>
              <p>Unit Kegiatan Mahasiswa Robotika IR-64</p>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">KSR PMI UNIT POLIJE</a></h4>
              <p>Unit Kegiatan Mahasiswa Korps Suka Rela Palang Merah Indonesia Unit Politeknik Negeri Jember</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">MENWA</a></h4>
              <p>Unit Kegiatan Mahasiswa Resimen Mahasiswa 877</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">KOPMA BERDIKARI</a></h4>
              <p>Unit Kegiatan Mahasiswa Koperasi Mahasiswa BERDIKARI</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">PSM</a></h4>
              <p>Unit Kegiatan Mahasiswa Paduan Suara Mahasiswa Gema Aluna Widjaja</p>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">HIMAPALA BEKISAR</a></h4>
              <p>Unit Kegiatan Mahasiswa Himpunan Mahasiswa Pecinta Alam BEKISAR</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">LABAIK</a></h4>
              <p>Unit Kegiatan Mahasiswa Lembaga Aktivis Islam Kampus</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">PMK</a></h4>
              <p>Unit Kegiatan Mahasiswa Persekutuan Mahasiswa Kristen</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">LUMUT</a></h4>
              <p>Unit Kegiatan Mahasiswa Lukis Musik Tari</p>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">KOTAK</a></h4>
              <p>Unit Kegiatan Mahasiswa Teater</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">UKPM EXPLANT</a></h4>
              <p>Unit Kegiatan Mahasiswa Pers Mahasiswa EXPLANT</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">SKIM</a></h4>
              <p>Unit Kegiatan Mahasiswa Studi Karya Ilmiah Mahasiswa</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">BARABAS DC</a></h4>
              <p>Unit Kegiatan Mahasiswa BARABAS Drum Corps</p>
            </div>
          </div>
        </div> -->
      </div>
    </section><!-- End Services Section -->

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
        &copy; Copyright <strong><span>Kelompok 4</span></strong>. All Rights Reserved
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