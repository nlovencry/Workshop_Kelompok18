<!DOCTYPE html>
<html lang="en">

<?php include '../head.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
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
              <li class="breadcrumb-item active">Tambah Data User</li>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header"> 
              <div class="card-footer">
                <?php
                if(isset($_GET['pesan'])){
                    $pesan=$_GET['pesan'];
                    if($pesan=="input"){
                        echo "Data berhasil diinput";
                    } elseif ($pesan=="update") {
                        echo "Data berhasil diupdate";
                    } elseif ($pesan=="hapus") {
                        echo "Data berhasil dihapus";
                    }
                }
                ?>
              <br>
                <a type="submit" href="tambahuser.php" class="btn btn-primary">+ Tambah Data User</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                <th>No</th>
                <th>Nama UKM</th>
                <th>Username</th>
                <th>Opsi</th>
            </tr>
            <?php
            include "koneksi.php";
                $query_mysql = mysqli_query($koneksi,"select * from tb_user");
                $nomor = 1;
            while ($data = mysqli_fetch_array($query_mysql)){
        ?>
                  </tr>
                  <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['NAMAUSER']; ?></td>
                <td><?php echo $data['USERNAME']; ?></td>
                <td>
                    <a type="button" class="btn btn-danger" href="hapus-user.php?id=<?php echo $data['id']; ?>" class="hapus">Hapus</a>
                    <a type="button" class="btn btn-primary" href="edit-user.php?id=<?php echo $data['id']; ?>" class="edit">Edit</a>
                </td>
            </tr>
        <?php } ?>
        </table>
    </body>
</html>




                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
