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
            <h1 class="m-0 text-dark">Data Pendaftar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pendaftar</li>
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
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Anggota Baru UKM</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="submit" class="btn btn-success" style="margin-bottom: 15px; ">Cetak Laporan</button>
                <select name="id_ukm" class="form-control" style="margin-bottom: 15px; ">
                  <?php
                    include '../../koneksi.php';
                    $data2 = mysqli_query($db, "SELECT * FROM tb_ukm");
                    while($key=mysqli_fetch_assoc($data2)) { 
                    echo"<option value='".$key['id_ukm']."'>".$key['deskripsi_ukm']."</option>";
                    }
                  ?>
                </select>
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>No WA</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    include '../../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($db, "SELECT tb_pendaftaran.nim_mhs, tb_mahasiswa.nama_mhs, tb_mahasiswa.no_wa FROM tb_pendaftaran INNER JOIN tb_mahasiswa ON tb_pendaftaran.nim_mhs = tb_mahasiswa.nim_mhs WHERE tb_pendaftaran.id_ukm='$key[id_ukm]'");
                    while ($a = mysqli_fetch_array($data)) {
                    ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $a['nim_mhs']; ?></td>
                    <td><?php echo $a['nama_mhs']; ?></td>
                    <td><?php echo $a['no_wa']; ?></td>
                    <td>
                      <a href="#" class="btn btn-info">Detail</a>
                    </td>
                  </tr>
                  <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
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
