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
  <link rel="stylesheet" type="text/css" href="homepage-ukm/style.css">

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
          <li><a href="homepage.php">Home</a></li>
          <li><a href="homepage.php #ukm">UKM</a></li>
          <li class="active"><a href="form-pendaftaran.php">Pendaftaran</a></li>
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
            <a href="#" class="btn-get-started scrollto">Panduan Daftar</a>
          </div>
        </div>
        <!-- <div class="col-lg- order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="../assets/img/ukmo.png" class="img-fluid animated" alt="">
        </div> -->
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="#" class="about section-bg">
    <div class="container p-3 my-3 border">
    <h1 class="text-center">Form Pendaftaran Mahasiswa Baru</h1>
            <form id="form" method="post" action="proses_pendaftaran.php">
              <!-- data ukm -->
              <div class="alert alert-primary">
                <strong>Data Unit Kegiatan Mahasiswa (UKM)</strong>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nomor Induk Mahasiswa (NIM):</label>
                    <input type="text" name="nim" class="form-control" placeholder="Masukan NIM">
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="col-sm-12">
                    <div class="form-group">
                        <label>Tanggal Pendaftaran:</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Unit Kegiatan Mahasiswa:</label>
                    <select class="form-control" name="ukm">
                      <option>Pilih</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Alasan Bergabung Dengan UKM:</label>
                    <textarea class="form-control" name="alasan" rows="3" placeholder="Alasan"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                <div class="form-group">
				          <label>SIM Online :</label>
			          	<input type="file" name="foto" required="required">
			        	  <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
		            </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End About Us Section -->

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