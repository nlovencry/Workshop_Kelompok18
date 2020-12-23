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
              <li class="breadcrumb-item active">Edit Pengurus UKM</li>
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
                <h3 class="card-title">Edit Pengurus UKM</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../proses/update-struktur.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <?php 
                    include '../../koneksi.php';
                    $id_ukm = $_SESSION['id_ukm'];
                    $id_struktur = $_GET['id_struktur'];
                    $data = mysqli_query($db, "SELECT tb_struktur.nama_mhs, tb_struktur.id_jabatan, tb_jabatan.nama_jabatan, tb_struktur.id_prodi, tb_prodi.nama_prodi, tb_struktur.angkatan, tb_struktur.foto FROM tb_struktur INNER JOIN tb_jabatan ON tb_struktur.id_jabatan = tb_jabatan.id_jabatan INNER JOIN tb_prodi ON tb_struktur.id_prodi = tb_prodi.id_prodi WHERE id_ukm='$id_ukm' AND id_struktur='$id_struktur'");
                    $a = mysqli_fetch_array($data);
                  ?>
                  <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="hidden" class="form-control" name="id_struktur" value="<?php echo $a['id_struktur']; ?>">
                    <input type="hidden" class="form-control" name="id_ukm" value="<?php echo $a['id_ukm']; ?>">
                    <input type="text" class="form-control" name="nama_mhs" value="<?php echo $a['nama_mhs']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Jabatan</label>
                    <select name="id_jabatan" class="form-control">
                      <?php
                        $data2 = mysqli_query($db, "SELECT * FROM tb_jabatan");
                        while($key=mysqli_fetch_assoc($data2)) { 
                          echo"<option value='".$key['id_jabatan']."' ".($key['id_jabatan']==$a['id_jabatan'] ? 'selected' : ' ')." >".$key['nama_jabatan']."</option>";
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Program Studi</label>
                    <select name="id_prodi" class="form-control">
                      <?php
                        $data2 = mysqli_query($db, "SELECT * FROM tb_prodi");
                        while($key=mysqli_fetch_assoc($data2)) { 
                          echo"<option value='".$key['id_prodi']."' ".($key['id_prodi']==$a['id_prodi'] ? 'selected' : ' ')." >".$key['nama_prodi']."</option>";
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Angkatan</label>
                    <input type="text" name="angkatan" class="form-control" value="<?php echo $a['angkatan']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" required="required" value="<?php echo $a['foto']; ?>">
                    <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
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
