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
          <div class="col-md-4">
            <!-- Profile Image -->
            <?php 
            include '../../koneksi.php';
            $id_ukm = $_GET['id_ukm'];
            $data = mysqli_query($db, "SELECT * FROM tb_ukm WHERE id_ukm='$id_ukm'");
            while ($a = mysqli_fetch_array($data)) {
            ?>
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../gambar/logo/<?php echo $a['logo_ukm']; ?>"
                       alt="User profile picture">
                </div>
                <h3 class="profile-username text-center"><?php echo $a['nama_ukm']; ?></h3>
                <p class="text-muted text-center"><?php echo $a['deskripsi_ukm']; ?></p>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Visi</b>
                    <p class="text-muted">
                      <?php echo $a['visi_ukm']; ?>
                    </p>
                  </li>
                  <li class="list-group-item">
                    <b>Misi</b>
                    <?php echo $a['misi_ukm']; ?>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <!-- <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sosial Media</h3>
              </div>
              <div class="card-body">
                <?php 
                $data = mysqli_query($db, "SELECT * FROM tb_sosmed WHERE id_ukm='$id_ukm'");
                while ($a = mysqli_fetch_array($data)) {
                ?>
                <strong></i>Instagram</strong>
                <p class="text-muted">
                  <?php echo $a['instagram']; ?>
                </p>
                <hr>
                <?php
                }
                ?>
                <a href="detail-struktur.php" class="btn btn-primary btn-block"><b>Detail Susunan Organisasi</b></a>
              </div>
            </div> -->
            <!-- /.card -->
            <?php
            }
            ?>
          </div>
          <!-- /.col -->
          <div class="col-md-8">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#pengurus" data-toggle="tab">Pengurus</a></li>
                  <li class="nav-item"><a class="nav-link" href="#divisi" data-toggle="tab">Divisi</a></li>
                  <li class="nav-item"><a class="nav-link" href="#prestasi" data-toggle="tab">Prestasi</a></li>
                  <li class="nav-item"><a class="nav-link" href="#kegiatan" data-toggle="tab">Kegiatan</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="pengurus">
                    <form class="form-horizontal" action="../proses/tambah-prestasi.php" method="POST">
                      <?php
                      $data = mysqli_query($db, "SELECT tb_struktur.nama_mhs, tb_jabatan.nama_jabatan, tb_prodi.nama_prodi, tb_struktur.angkatan, tb_struktur.foto FROM tb_struktur INNER JOIN tb_jabatan ON tb_struktur.id_jabatan = tb_jabatan.id_jabatan INNER JOIN tb_prodi ON tb_struktur.id_prodi = tb_prodi.id_prodi WHERE tb_struktur.id_ukm = '$id_ukm'");
                      while ($a = mysqli_fetch_array($data)) {
                      ?>
                      <div class="form-group">
                        <label for="inputName" class="col-form-label"><?php echo $a['nama_jabatan']; ?></label>
                        <input type="text" name="nama_prestasi" class="form-control" id="inputName" value="<?php echo $a['nama_mhs']; ?>" disabled>
                      </div>
                      <?php
                      }
                      ?>
                    </form>
                    <div>
                      <div class="form-group row">
                        <div class="col-sm-12" align="right">
                          <a href="detail-ukm-pengurus.php?id_ukm=<?php echo $id_ukm; ?>" class="btn btn-primary btn-block"><b>Detail Pengurus</b></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="prestasi">
                    <div>
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Prestasi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            include '../../koneksi.php';
                            $no = 1;
                            $data = mysqli_query($db, "SELECT * FROM tb_prestasi WHERE id_ukm='$id_ukm'");
                            while ($a = mysqli_fetch_array($data)) {
                          ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $a['nama_prestasi']; ?></td>
                          </tr>
                          <?php
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="divisi">
                    <div>
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Divisi</th>
                            <th>Nama Koordinator</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            include '../../koneksi.php';
                            $no = 1;
                            $data = mysqli_query($db, "SELECT * FROM tb_divisi WHERE id_ukm='$id_ukm'");
                            while ($a = mysqli_fetch_array($data)) {
                          ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $a['nama_divisi']; ?></td>
                            <td><?php echo $a['nama_co']; ?></td>
                          </tr>
                          <?php
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="kegiatan">
                    <div>
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Foto Kegiatan</th>
                            <th>Keterangan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            include '../../koneksi.php';
                            $no = 1;
                            $data = mysqli_query($db, "SELECT * FROM tb_kegiatan WHERE id_ukm='$id_ukm'");
                            while ($a = mysqli_fetch_array($data)) {
                          ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $a['nama_kegiatan']; ?></td>
                            <td><img src="../../gambar/kegiatan/<?php echo $a['foto_kegiatan']; ?>" width="50" height="70"></td>
                            <td><?php echo $a['keterangan']; ?></td>
                          </tr>
                          <?php
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
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
