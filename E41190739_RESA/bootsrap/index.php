<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Selecao Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao - v2.2.0
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">Sistem Informasi Akademik</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">Form Mahasiswa</a></li>
          <li><a href="#services">Form Dosen</a></li>
          <li><a href="#portfolio">Data Mahasiswa</a></li>
          <li><a href="#pricing">Data Dosen</a></li>
          
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>SISTEM INFORMASI AKADEMIK</span></h2>
          
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Politekni Negeri Jember</h2>
          <img src="Baner2.jpg" style="width:80%">
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Teknologi Informasi</h2>
          <img src="baner3.png" style="width:80%">
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
       <form action="#portfolio">

        <div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
             <!-- Card Headerfor - Dropdown -->
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Form Mahasiswa</h6>
              <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" 
                aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
              </a>
            </div>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="exapmleInputEmail1">NIM</label>
                <input type="text" class="form-control form-control-use" id="nim" 
                    name="nim" placeholder="NIM Anda" required maxlength="9" minlength="9">
              </div>
              <div class="form-group">
                <label for="exapmleInputEmail1">NAMA</label>
                <input type="text" class="form-control form-control-use" id="nama" name="nama" placeholder="Name Anda" 
                required pattern="[a-zA-Z]*" title="Tidak Boleh Menggunakan Angka" 
                required onkeypress='return harusHuruf(event)'>

                <script>
     
                        function harusHuruf(evt){
                                var charCode = (evt.which) ? evt.which : event.keyCode
                                if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
                                    return false;
                                return true;
                                                }  
                    </script>
              </div>
              <div class="form-group">
                <label for="exapmleInputEmail1">ALAMAT</label>
                <input type="text" class="form-control form-control-use" id="alamat" name="alamat" placeholder="Alamat Anda" required>
              </div>
              <div class="form-group">
                <label for="exapmleInputEmail1">TTL</label>
                <input type="date" class="form-control form-control-use" name="password" required>
              </div>
              <br><button type="submit" class="btn btn-primary">Save</button></br>                  
              
            </form>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <form action="#pricing"
        <div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
             <!-- Card Header - Dropdown -->
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Form Dosen</h6>
              <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" 
                aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
              </a>
            </div>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="exapmleInputEmail1">NIP</label>
                <input type="text" class="form-control form-control-use" id="nip" name="nip" placeholder="NIM Anda" required maxlength="10" minlength="0">
              </div>
              <div class="form-group">
                <label for="exapmleInputEmail1">NAMA</label>
                <input type="text" class="form-control form-control-use" id="nama" name="nama" placeholder="Name Anda" required pattern="[a-zA-Z]*" title="Tidak Boleh Menggunakan Angka" required onkeypress='return harusHuruf(event)'>

                <script>
     
                        function harusHuruf(evt){
                                var charCode = (evt.which) ? evt.which : event.keyCode
                                if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
                                    return false;
                                return true;
                                                }  
                    </script>
              </div>
              <div class="form-group">
                <label for="exapmleInputEmail1">ALAMAT</label>
                <input type="text" class="form-control form-control-use" id="alamat" name="alamat" placeholder="Alamat Anda" required>
              </div>
              <div class="form-group">
                <label for="exapmleInputEmail1">TTL</label>
                <input type="date" class="form-control form-control-use" name="ttl" required>
              </div>
              <br><button type"submit" class="btn btn-primary">Save</button></br>                  
              
              
    </section>
    
    <!-- End Features Section -->

    <!-- ======= Cta Section ======= -->
    <section id="portfolio" class="portfolio"></section>
    <div class="d-block border m-3 p-3">
      <div>
      <table class="table table-striped w-100">
          <thead>
              <th>NIM</th>
              <th>NAMA</th>
              <th>ALAMAT</th>
              <th>TANGGAL</th>
          </thead>
          <tbody>
              <td>E41190739</td>
              <td>Resa Wahyu Saputra</td>
              <td>Jember</td>
              <td>11/05/2000</td>
          </tbody>
      </table>
      </div>
  </div>
</div>
</div>
    <!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="pricing" class="pricing"></section>
    <div class="d-block border m-3 p-3">
      <div>
      <table class="table table-striped w-100">
          <thead>
              <th>NIM</th>
              <th>NAMA</th>
              <th>ALAMAT</th>
              <th>TANGGAL</th>
          </thead>
          <tbody>
              <td>0012089401</td>
              <td>Mukhamad Angga Gumilang,S. Pd.,M.Eng.</td>
              <td>Jember</td>
              <td>15/05/2000</td>
          </tbody>
      </table>
      </div>
  </div>
</div>
</div>
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    
    <!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
                        <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>SISTEM AKADEMIK</h3>
      <p>Berjuang Untuk Mencapai Mimpi</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>