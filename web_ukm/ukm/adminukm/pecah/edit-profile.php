<!DOCTYPE html>
<html lang="en">

<?php include '../head.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <?php 
  session_start();
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
      echo "<script>alert('Silahkan login terlebih dahulu!'); location='../../login';</script>";
    }
  ?>
<div class="wrapper">
  <?php include '../navbar.php'; ?>

  <?php include '../sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profile UKM</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile UKM</li>
              <li class="breadcrumb-item active">Edit Profile UKM</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Profile UKM</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../proses/update-profile-ukm" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <?php 
                    include '../../koneksi.php';
                    $id_ukm = $_SESSION['id_ukm'];
                    $data = mysqli_query($db, "SELECT * FROM tb_ukm WHERE id_ukm='$id_ukm'");
                    while ($a = mysqli_fetch_array($data)) {
                  ?>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="hidden" class="form-control" name="id_ukm" value="<?php echo $a['id_ukm']; ?>">
                    <input type="text" class="form-control" name="nama_ukm" value="<?php echo $a['nama_ukm']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi_ukm"><?php echo $a['deskripsi_ukm']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Visi</label>
                    <input type="text" class="form-control" name="visi_ukm" value="<?php echo $a['visi_ukm']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Misi</label>
                    <textarea class="ckeditor" id="ckeditor" name="misi_ukm"><?php echo $a['misi_ukm']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Link Youtube Video Promosi (Optional)</label>
                    <input type="text" class="form-control" name="link_ytb" value="<?php echo $a['link_ytb']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Logo</label>
                    <input type="file" name="logo" value="<?php echo $a['logo_ukm']; ?>"><img width="60" height="60" src="../../gambar/logo/<?php echo $a['logo_ukm']; ?>">
                    <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | Ukuran Max 10mb</p>
                  </div>
                  <?php
                  }
                  ?>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="profile-ukm" class="btn btn-secondary">Kembali</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <?php include '../footer.php'; ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../../../dist/js/demo.js"></script>

<!-- PAGE ../../../PLUGINS -->
<!-- jQuery Mapael -->
<script src="../../../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../../../plugins/raphael/raphael.min.js"></script>
<script src="../../../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../../../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../../../plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="../../../dist/js/pages/dashboard2.js"></script>
</body>
</html>
