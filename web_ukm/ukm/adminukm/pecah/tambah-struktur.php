<!DOCTYPE html>
<html lang="en">

<?php include '../head.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <?php 
  session_start();
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
      echo "<script>alert('Silahkan login terlebih dahulu!'); location='../../login.php';</script>";
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
              <li class="breadcrumb-item active">Tambah Pengurus UKM</li>
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
                <h3 class="card-title">Tambah Pengurus UKM</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../proses/update-profile-ukm.php" method="POST" role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama_mhs" placeholder="Masukkan Nama Mahasiswa" required="">
                  </div>
                  <div class="form-group">
                    <label>Jabatan</label>
                    <select name="nama_jabatan" class="form-control" required="">
                      <?php
                        include '../../koneksi.php';
                        $data = mysqli_query($db, "SELECT nama_jabatan FROM tb_jabatan");
                        $a = mysqli_fetch_array($data);
                        foreach ($a as $key => $value) {
                          echo "<option value='$key'>";
                          echo "$a['nama_jabatan']";
                          echo "</option>";
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Program Studi</label >
                    <select name="nama_prodi" class="form-control" required="">
                      <?php
                        foreach ($nama_prodi as $prodi) {
                          echo "<option value='$prodi'";
                          echo $a['nama_prodi']==$prodi?'selected="selected"':'';
                          echo ">$prodi</option>";
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Angkatan</label>
                    <input type="number" name="angkatan" class="form-control" placeholder="Masukkan Angkatan" required="">
                  </div>
                  <!-- <div class="form-group">
                    <label>Logo</label>
                    <input type="file" name="logo" required="required">
                    <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                  </div> -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                  <a href="profile-ukm.php" class="btn btn-secondary">Kembali</a>
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
