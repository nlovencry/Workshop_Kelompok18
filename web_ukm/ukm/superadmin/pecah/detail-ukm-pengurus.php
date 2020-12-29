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
              <li class="breadcrumb-item active">Detail Pengurus UKM</li>
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
            <div class="card">
              <div class="card-header">
                <?php
                include '../../koneksi.php';
                $id_ukm = $_GET['id_ukm'];
                ?>
                <a href="detail-ukm.php?id_ukm=<?php echo $id_ukm; ?>" class="btn btn-secondary">Kembali</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Mahasiswa</th>
                      <th>Jabatan</th>
                      <th>Program Studi</th>
                      <th>Angkatan</th>
                      <th>Foto</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include '../../koneksi.php';
                      $no = 1;
                      $data = mysqli_query($db, "SELECT tb_struktur.id_struktur, tb_struktur.nama_mhs, tb_jabatan.nama_jabatan, tb_prodi.nama_prodi, tb_struktur.angkatan, tb_struktur.foto FROM tb_struktur INNER JOIN tb_jabatan ON tb_struktur.id_jabatan = tb_jabatan.id_jabatan INNER JOIN tb_prodi ON tb_struktur.id_prodi = tb_prodi.id_prodi WHERE id_ukm='$id_ukm'");
                      while ($a = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $a['nama_mhs']; ?></td>
                      <td><?php echo $a['nama_jabatan']; ?></td>
                      <td><?php echo $a['nama_prodi']; ?></td>
                      <td><?php echo $a['angkatan']; ?></td>
                      <td><img src="../../gambar/struktur/<?php echo $a['foto']; ?>" width="50" height="70"></td>
                    </tr>
                    <?php
                      }
                    ?>
                  </tbody>
                </table>
              </div>
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
