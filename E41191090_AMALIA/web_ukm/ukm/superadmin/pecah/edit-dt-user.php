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
            <h1 class="m-0 text-dark">Data User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard-superadmin.php">Home</a></li>
              <li class="breadcrumb-item active">Form Edit Data User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">+<small>Tambah Data UKM<small></h3>
              </div>
              <!-- /.card-header -->
                <!-- form start -->
                <?php
                include '../../koneksi.php';
                $id=$_GET['id_user'];
                $query_mysql=mysqli_query($koneksi,"SELECT * FROM user WHERE id = '$id_user'");
                $nomor=1;
                while ($data=mysqli_fetch_array($query_mysql)) {
                    ?>
                <form action="../proses/update-dt-user.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" name="id_user" class="form-control form-control-use" 
                    value="<?php echo $data['id_user']; ?>">
                  </div>
                  <div class="form-group">
                    <option disabled="">Pilih Nama Unit Kegiatan Mahasiswa</option>
                    <select name="nama_ukm" class="form-control form-control-user">
                      <option value="UKM-O">UKM-O</option>
                      <option value="E-CLUB">E-CLUB</option>
                      <option value="ROBOTIKA IR-64">ROBOTIKA IR-64</option>
                      <option value="RASPOL">RASPOL</option>
                      <option value="HIMAPALA BEKISAR">HIMAPALA BEKISAR</option>
                      <option value="KSR PMI">KSR PMI</option>
                      <option value="MENWA 877">MENWA 877</option>
                      <option value="KOPMA BERDIKARI">KOPMA BERDIKARI</option>
                      <option value="PSM">PSM</option>
                      <option value="PMK(KRISTEN)">PMK(KRISTEN)</option>
                      <option value="LABAIK">LABAIK</option>
                      <option value="UKPM EXPLANT">UKPM EXPLANT</option>
                      <option value="SKIM">SKIM</option>
                      <option value="BARABAS DC">BARABAS DC</option>
                      <option value="LUMUT">LUMUT</option>
                      <option value="KOTAK">KOTAK</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" name="username" value="<?php echo $data['username']; ?>">
                  </div>
                  <div class="form-group">
                    <input type="text" name="password" value="<?php echo $data['password']; ?>">
                  </div>
                  <div class="form-group">
                  <select name="Pilih Level" id="Pilih Level" value="<?php echo $data['Pilih Lavel']; ?>">
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                    <option value="Superadmin">Super Admin</option>
                  </select>  
                  </div>
                  <div class="form-group">
                    <button input type="submit" class="btn btn-primary">Simpan</button>
                    <button input type="reset" class="btn btn-danger">Reset</button>
                    <a href="../pecah/dt-user.php" class="btn btn-secondary">Kembali</a>
                  </div> 
                </div>
                <?php } ?>
            <!-- /.card body-->
            </form>
            </div>
            <!-- /.card-->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
