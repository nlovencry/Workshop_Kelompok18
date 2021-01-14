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
            <h1 class="m-0 text-dark">Data User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#p">Home</a></li>
              <li class="breadcrumb-item active">Data User</li>
              <li class="breadcrumb-item active">Edit Data User</li>
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
                <h3 class="card-title">Edit Data User</h3>
              </div>
              <!-- /.card-header -->
                <!-- form start -->
                <form action="../proses/update-dt-user" method="POST">
                <div class="card-body">
                  <?php
                    include '../../koneksi.php';
                      $id_user = $_GET['id_user'];
                      $query_mysql = mysqli_query($db,"SELECT tb_user.id_user, tb_ukm.id_ukm, tb_ukm.nama_ukm, tb_user.username FROM tb_ukm INNER JOIN tb_user ON tb_ukm.id_user = tb_user.id_user WHERE tb_user.id_user='$id_user'");
                      $nomor = 1;
                    while ($a = mysqli_fetch_array($query_mysql)) {
                  ?>
                  <div class="form-group">
                    <input type="hidden" name="id_user" value="<?php echo $a['id_user']; ?>">
                    <select name="id_ukm" class="form-control" disabled="">
                      <?php
                        $data2 = mysqli_query($db, "SELECT * FROM tb_ukm");
                        while($key=mysqli_fetch_assoc($data2)) { 
                          echo"<option value='".$key['id_ukm']."' ".($key['id_ukm']==$a['id_ukm'] ? 'selected' : ' ')." >".$key['nama_ukm']."</option>";
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" value="<?php echo $a['username']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1" value="<?php echo $a['password']; ?>" require>
                  </div>
                  <div class="form-group">
                    <button input type="submit" class="btn btn-primary">Simpan</button>
                    <button input type="reset" class="btn btn-danger">Reset</button>
                    <a href="../pecah/dt-user" class="btn btn-secondary">Kembali</a>
                  </div> 
                  <?php
                  }
                  ?>
                </div>
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
