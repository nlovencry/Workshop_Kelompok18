<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Pendaftaran Unit Kegiatan Mahasiswa</title>
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
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="homepage.php">Home</a></li>
          <li class="active"><a href="homepage.php #ukm">UKM</a></li>
          <li><a href="form-pendaftaran.php">Pendaftaran</a></li>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
  <section id="hero" class="d-flex align-items-center">
    <?php 
    include 'koneksi.php';
    $id_ukm = $_GET['id_ukm'];
    $data = mysqli_query($db, "SELECT * FROM tb_ukm WHERE id_ukm='$id_ukm'");
    while ($a = mysqli_fetch_array($data)) {
    ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1><?php echo $a['nama_ukm']?></h1>
          <h2><?php echo $a['deskripsi_ukm']; ?></h2>
          <div class="d-lg-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=7WVkGCBOhic" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="../assets/img/ukmo.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
    <?php
    }
    ?>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Visi & Misi</h2>
        </div>
        <div class="row content">
          <?php 
          $data = mysqli_query($db, "SELECT * FROM tb_ukm WHERE id_ukm='$id_ukm'");
          while ($a = mysqli_fetch_array($data)) {
          ?>
          <div class="col-lg-6">
            <p>
              "<?php echo $a['visi_ukm']; ?>"
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              1. Menuju akad yang berkwalitas dan mencapai prestasi di asia 2019 <br>
              2. Memiliki akad yang berkwalitas dalam berbagai bidang olahraga menjunjung sportifitas yang tinggi
            </p>
          </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section><!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="content">
              <h3><strong>Prestasi</strong></h3>
            </div>
            <div class="accordion-list">              
              <ul>
                <?php 
                  $no = 1;
                  $data = mysqli_query($db, "SELECT * FROM tb_prestasi WHERE id_ukm='$id_ukm'");
                  while ($a = mysqli_fetch_array($data)) {
                  ?>
                    <li>
                      <a data-toggle="collapse" class="collapse" href="#"><span><?php echo $no++; ?></span><?php echo $a['nama_prestasi']; ?></a>
                    </li>
                 <?php
                  }
                ?>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="content">
              <h3><strong>Divisi</strong></h3>
            </div>
            <div class="accordion-list">
              <?php 
              $no = 1;
              $data = mysqli_query($db, "SELECT * FROM tb_divisi WHERE id_ukm='$id_ukm'");
              while ($a = mysqli_fetch_array($data)) {
              ?>
              <ul>
                <li>
                  <a data-toggle="collapse" class="collapse" href="#"><span><?php echo $no++; ?></span><?php echo $a['nama_divisi']; ?></a>
                </li>
              </ul>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Foto Kegiatan</h2>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="../assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="../assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="../assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="../assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="../assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Susunan Organisasi</h2>
        </div>
        <div class="row">
          <?php 
          $data = mysqli_query($db, "SELECT tb_ukm.id_ukm, tb_ukm.nama_ukm, tb_struktur.nama_mhs, tb_jabatan.id_jabatan, tb_jabatan.nama_jabatan, tb_prodi.nama_prodi, tb_struktur.angkatan, tb_struktur.foto FROM tb_struktur INNER JOIN tb_ukm ON tb_struktur.id_ukm = tb_ukm.id_ukm INNER JOIN tb_prodi ON tb_struktur.id_prodi = tb_prodi.id_prodi INNER JOIN  tb_jabatan ON tb_struktur.id_jabatan = tb_jabatan.id_jabatan WHERE tb_ukm.id_ukm='$id_ukm'");
          while ($a = mysqli_fetch_array($data)) {
          ?>
          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php echo $a['nama_mhs']; ?></h4>
                <span><?php echo $a['nama_jabatan']." ".$a['nama_ukm']; ?></span>
                <p>
                  <?php echo $a['nama_prodi']; ?><br>
                  <?php echo $a['angkatan']; ?>
                </p>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section><!-- End Team Section -->
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