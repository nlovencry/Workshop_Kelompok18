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
            $id_ukm = $_SESSION['id_ukm'];
            $data = mysqli_query($db, "SELECT * FROM tb_ukm WHERE id_ukm='$id_ukm'");
            while ($a = mysqli_fetch_array($data)) {
            ?>
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../gambar/logo.png"
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
                  </li>
                </ul>
                <a href="edit-profile.php" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Susunan Organisasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
                $data = mysqli_query($db, "SELECT tb_struktur.nama_mhs, tb_jabatan.nama_jabatan, tb_prodi.nama_prodi, tb_struktur.angkatan, tb_struktur.foto FROM tb_struktur INNER JOIN tb_jabatan ON tb_struktur.id_jabatan = tb_jabatan.id_jabatan INNER JOIN tb_prodi ON tb_struktur.id_prodi = tb_prodi.id_prodi WHERE tb_struktur.id_ukm = '$id_ukm'");
                while ($a = mysqli_fetch_array($data)) {
                ?>
                <strong></i><?php echo $a['nama_jabatan']; ?></strong>
                <p class="text-muted">
                  <?php echo $a['nama_mhs']; ?>
                </p>
                <hr>
                <?php
                }
                ?>
                <a href="detail-struktur.php" class="btn btn-primary btn-block"><b>Detail Susunan Organisasi</b></a>
              </div>
              <!-- /.card-body -->
            </div>
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
                  <li class="nav-item"><a class="nav-link active" href="#prestasi" data-toggle="tab">Prestasi</a></li>
                  <li class="nav-item"><a class="nav-link" href="#kegiatan" data-toggle="tab">Kegiatan</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="prestasi">
                    <form class="form-horizontal" action="../proses/tambah-prestasi.php" method="POST">
                      <div class="form-group">
                        <input type="hidden" name="id_ukm" class="form-control" id="inputName" value="<?php echo $id_ukm; ?>">
                        <label for="inputName" class="col-form-label">Nama Prestasi</label>
                        <input type="text" name="nama_prestasi" class="form-control" id="inputName" placeholder="Masukkan Nama Prestasi">
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-12" align="right">
                          <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                      </div>
                    </form>
                    <div>
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Prestasi</th>
                            <th>Aksi</th>
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
                            <td>
                              <a href="../proses/hapus-prestasi.php?id_prestasi=<?php echo $a['id_prestasi']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
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
                    <form class="form-horizontal" action="../proses/tambah-kegiatan.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <input type="hidden" name="id_ukm" class="form-control" id="inputName" value="<?php echo $id_ukm; ?>">
                        <label for="inputName" class="col-form-label">Nama Kegiatan</label>
                        <input type="text" name="nama_kegiatan" class="form-control" id="inputName" placeholder="Masukkan Nama Kegiatan">
                      </div>
                      <div class="form-group">
                        <label>Foto :</label>
                        <input type="file" name="foto" required="required">
                        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                      </div>  
                      <div class="form-group">
                        <label for="inputExperience" class="col-form-label">Keterangan</label>
                        <textarea class="form-control" name="keterangan" id="inputExperience" placeholder="Keterangan Foto"></textarea>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-12" align="right">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                    <div>
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Foto Kegiatan</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
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
                            <td><img src="../../gambar/kegiatan/<?php echo $a['foto_kegiatan']; ?>" width="35" height="40"></td>
                            <td><?php echo $a['keterangan']; ?></td>
                            <td>
                              <a href="../proses/hapus-kegiatan.php?id_kegiatan=<?php echo $a['id_kegiatan']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
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
