<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="homepage-ukm/style.css">
  <script src="../../jquery/jquery-3.4.1.min.js"></script>
  <script src="....//bootstrap/js/bootstrap.min.js"></script>
  <title>Sistem Informasi Pendaftaran Unit Kegiatan Mahasiswa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="homepage-ukm/style.css">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

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

      <h1 class="logo mr-auto"><img src="../gambar/logo-gabung.png"></h1>
     
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="../../assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="../../index">Home</a></li>
          <li><a href="../../index#ukm">UKM</a></li>
          <li><a href="../form-pendaftaran">Pendaftaran</a></li>
          <?php
          session_start();
          if (isset($_SESSION['status'])){
            if ($_SESSION['status'] == 'Login') {
            ?>
            <li class="active"><a href="profile-mhs">Halo <?php echo $_SESSION['nama_mhs']; ?></a></li>
            <li><a href="../logout">Logout</a></li>
            <?php
            }
          }else{
          ?>
          <li><a href="../login">Login</a></li>
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
          <li><a href="../homepage">Home</a></li>
          <li>Profile Mahasiswa</li>
        </ol>
        <h2>Profile Mahasiswa</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container" data-aos="fade-up">
          <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-5">
              <a href="edit-profile?nim_mhs=<?php echo $_SESSION['nim_mhs']; ?>" class="btn btn-primary">Edit Profile</a>
              <a href="../form-pendaftaran" class="btn btn-secondary">Kembali</a>
            </div>
          </div>
          <div class="alert alert-primary">
            <strong>Data Diri Mahasiswa</strong>
          </div>
          <?php
          include '../koneksi.php';
          $nim_mhs = $_SESSION['nim_mhs'];
          $data = mysqli_query($db, "SELECT tb_mahasiswa.nim_mhs, tb_mahasiswa.nama_mhs, tb_mahasiswa.jk, tb_mahasiswa.no_wa, tb_mahasiswa.email, tb_mahasiswa.angkatan, tb_mahasiswa.alamat, tb_jurusan.nama_jurusan, tb_prodi.nama_prodi FROM tb_mahasiswa INNER JOIN tb_prodi ON tb_mahasiswa.id_prodi = tb_prodi.id_prodi INNER JOIN tb_jurusan ON tb_prodi.id_jurusan = tb_jurusan.id_jurusan WHERE tb_mahasiswa.nim_mhs='$nim_mhs'");
          $a = mysqli_fetch_array($data);
          ?>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Nomor Induk Mahasiswa</label>
                <input type="text" name="nim_mhs" class="form-control" value="<?php echo $nim_mhs; ?>" readonly>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_mhs" class="form-control" value="<?php echo $a['nama_mhs']; ?>" readonly>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <input type="text" name="jk" class="form-control" value="<?php echo $a['jk']; ?>" readonly>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Nomor Whatsapp</label>
                <input type="number" name="no_wa" class="form-control" value="<?php echo $a['no_wa']; ?>" readonly>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $a['email']; ?>" readonly>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Angkatan</label>
                <input type="number" name="angkatan" class="form-control" value="<?php echo $a['angkatan']; ?>" readonly>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Alamat (Tempat Tinggal di Jember)</label>
                <textarea class="form-control" name="alamat" rows="3" readonly=""><?php echo $a['alamat']; ?></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="nama_jurusan" class="form-control" value="<?php echo $a['nama_jurusan']; ?>" readonly>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Program Studi</label>
                <input type="text" name="nama_prodi" class="form-control" value="<?php echo $a['nama_prodi']; ?>" readonly>
              </div>
            </div>
          </div>
      </div>
    </section>

    <!-- data ukm -->
    <section class="service section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Data Unit Kegiatan Mahasiswa</h2>
        </div>
        <div class="alert alert-primary">
          <strong>Daftar Unit Kegiatan Mahasiswa yang diikuti <?php echo $_SESSION['nama_mhs']; ?></strong>
        </div>
        <?php
        $data = mysqli_query($db, "SELECT tb_pendaftaran.nim_mhs, tb_mahasiswa.nama_mhs, tb_ukm.id_ukm, tb_ukm.nama_ukm FROM tb_pendaftaran INNER JOIN tb_mahasiswa ON tb_pendaftaran.nim_mhs = tb_mahasiswa.nim_mhs INNER JOIN tb_ukm ON tb_pendaftaran.id_ukm = tb_ukm.id_ukm WHERE tb_pendaftaran.nim_mhs='$nim_mhs'");
        while ($a = mysqli_fetch_array($data)) {
        ?>
        <div class="row">
          <div class="col-sm-11">
            <div class="form-group">
              <label>Unit Kegiatan Mahasiswa</label>
              <input type="text" name="nama_ukm" class="form-control" value="<?php echo $a['nama_ukm']; ?>" readonly>
            </div>
          </div>
          <div class="col-sm-1">
            <div class="form-group">
              <label>Aksi</label>
              <a href="keluar-ukm?id_ukm=<?php echo $a['id_ukm']; ?>" class="btn btn-danger">Keluar</a>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
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
            <img src="../gambar/logo-gabungan.png" width="350" height="180">
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
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

</body>

</html>