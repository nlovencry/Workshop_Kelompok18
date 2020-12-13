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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                <h3 class="card-title">+<small>Tambah Data UKM</small></h3>
              </div>
              <!-- /.card-header -->
              <form id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <select name="Pilih Unit Kegiatan Mahasiswa" id="Pilih Unit Kegiatan Mahasiswa" 
                    class="form-control form-control-user">
                    <option value="Olahraga">Olahraga</option>
                    <option value="Robotika">Robotika</option>
                    <option value="English Club">English Club</option>
                    <option value="Pramuka">Pramuka</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" name="text" class="form-control" id="exampleInputEmail1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="text" name="text" class="form-control" id="exampleInputEmail1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="text" name="text" class="form-control" id="exampleInputEmail1" placeholder="Pilih Level">
                  </div>
                  <div>
                    <button type="button" class="btn  btn-primary btn-xs">Submit</button>
                    <button type="button" class="btn  btn-danger btn-xs">Cancle</button>
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
