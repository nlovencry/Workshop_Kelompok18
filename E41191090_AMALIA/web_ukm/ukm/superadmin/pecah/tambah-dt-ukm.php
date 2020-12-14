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
            <h1 class="m-0 text-dark">Data UKM</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboad-superadmin.php">Home</a></li>
              <li class="breadcrumb-item active">Form Tambah Data UKM</li>
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
              <!-- form start -->
              <form id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <input type="text" name="text" class="form-control form-control-use" id="exampleInputEmail1" placeholder="Nama UKM" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="text" class="form-control form-control-use" id="exampleInputEmail1" placeholder="Deskripsi UKM" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="text" class="form-control form-control-use" id="exampleInputEmail1" placeholder="Nama Ketua UKM" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="text" class="form-control form-control-use" id="exampleInputEmail1" placeholder="Nama Wakil Ketua UKM" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="text" class="form-control form-control-use" id="exampleInputEmail1" placeholder="Nama Sekretaris 1 UKM" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="text" class="form-control form-control-use" id="exampleInputEmail1" placeholder="Nama Sekretaris 2 UKM" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="text" class="form-control form-control-use" id="exampleInputEmail1" placeholder="Nama Bendahara 1 UKM" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="text" class="form-control form-control-use" id="exampleInputEmail1" placeholder="Nama Bendahara 2 UKM" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="text" class="form-control form-control-use" id="exampleInputEmail1" placeholder="Visi UKM" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="text" class="form-control form-control-use" id="exampleInputEmail1" placeholder="Misi UKM" required>
                  </div>
                  <td>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a type="button" class="btn btn-danger" href="hapus-user.php?id=<?php echo $data['id']; ?>" class="hapus">Cancle</a>
                </td>
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
