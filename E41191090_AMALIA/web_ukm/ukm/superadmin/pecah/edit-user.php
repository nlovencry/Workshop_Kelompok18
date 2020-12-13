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
              <li class="breadcrumb-item active">Dashboard</li>
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
              <br>
                <a href="datauser.php">Lihat semua data</a>
              <br>
                <?php
                include "koneksi.php";
                $id=$_GET['id'];
                $query_mysql=mysqli_query($koneksi,"select * from user where id = '$id'");
                $nomor=1;
                while ($data=mysqli_fetch_array($query_mysql)) {
                ?>
              <!-- /.card-header -->
              <form id="quickForm">
                <div class="card-body">
                <form action="update.php" method="POST">
            <table>
                
               
            </table>
        </form>
                  <div class="form-group">
                    <select name="Pilih Unit Kegiatan Mahasiswa" id="Pilih Unit Kegiatan Mahasiswa" 
                    class="form-control form-control-user">
                    <option value="Olahraga">Olahraga</option>
                    <option value="Robotika">Robotika</option>
                    <option value="English Club">English Club</option>
                    <option value="Pramuka">Pramuka</option>
                    </select>
                  </div>

                  <tr>
                    <td>Nama</td>
                    <td><input type="hidden" name="id" value="<?php echo $data['id']?>">
                    <input type="text" name="nama" value="<?php echo $data['nama']?>">
                    </td>
                </tr>

                  <di
                  <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $data['id']?>">
                    <input type="text" name="username" value="<?php echo $data['username']?>"> 
                  </div>
                  <div class="form-group">
                    <input type="text" name="text" class="form-control" id="exampleInputEmail1" placeholder="Password">
                  </div>
                  <div class="form-group">
                  <select name="Pilih Level" id="Pilih Level" 
                    class="form-control form-control-user">
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                    <option value="Superadmin">Super Admin</option>
                    </select>  
                  </div>
                  <div>
                    <button type="button" class="btn  btn-primary">Submit</button>
                    <button href="datauser.php" type="button" class="btn  btn-danger">Cancle</button>
                  </div> 
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
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
