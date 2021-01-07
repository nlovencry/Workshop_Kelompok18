<!DOCTYPE html>
<html lang="en">
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <?php 
  session_start();
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
      echo "<script>alert('Silahkan login terlebih dahulu!'); location='../../login.php';</script>";
    }
  ?>

<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <?php
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Data Pendaftar.xls");
  ?>
  <div class="content-wrapper">

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
                <table id="example1" class="table table-bordered table-hover" border="1">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal Pendaftaran</th>
                    <th>Unit Kegiatan Mahasiswa</th>
                    <th>Nomor Induk Mahasiswa</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Nomor Whatsapp</th>
                    <th>Email</th>
                    <th>Program Studi</th>
                    <th>Angkatan</th>
                    <th>Alamat</th>
                    <th>Alasan</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    include '../../koneksi.php';
                    $no = 1;
                    if (isset($_POST['submit'])) {
                      $id = $_POST['id_ukm'];
                      $data = mysqli_query($db, "SELECT tb_pendaftaran.tgl_pendaftaran, tb_pendaftaran.nim_mhs, tb_mahasiswa.nama_mhs, tb_mahasiswa.jk, tb_mahasiswa.no_wa, tb_mahasiswa.email, tb_prodi.nama_prodi, tb_mahasiswa.angkatan, tb_mahasiswa.alamat, tb_pendaftaran.alasan, tb_pendaftaran.sim_online, tb_ukm.nama_ukm FROM tb_pendaftaran INNER JOIN tb_mahasiswa ON tb_pendaftaran.nim_mhs = tb_mahasiswa.nim_mhs INNER JOIN tb_ukm ON tb_pendaftaran.id_ukm = tb_ukm.id_ukm INNER JOIN tb_prodi ON tb_mahasiswa.id_prodi = tb_prodi.id_prodi WHERE tb_pendaftaran.id_ukm='$id'");
                    }else{
                      $data = mysqli_query($db, "SELECT tb_pendaftaran.tgl_pendaftaran, tb_pendaftaran.nim_mhs, tb_mahasiswa.nama_mhs, tb_mahasiswa.jk, tb_mahasiswa.no_wa, tb_mahasiswa.email, tb_prodi.nama_prodi, tb_mahasiswa.angkatan, tb_mahasiswa.alamat, tb_pendaftaran.alasan, tb_pendaftaran.sim_online, tb_ukm.nama_ukm FROM tb_pendaftaran INNER JOIN tb_mahasiswa ON tb_pendaftaran.nim_mhs = tb_mahasiswa.nim_mhs INNER JOIN tb_ukm ON tb_pendaftaran.id_ukm = tb_ukm.id_ukm INNER JOIN tb_prodi ON tb_mahasiswa.id_prodi = tb_prodi.id_prodi ORDER BY tb_pendaftaran.id_ukm");
                    }
                    while ($a = mysqli_fetch_array($data)) {
                    ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $a['tgl_pendaftaran']; ?></td>
                    <td><?php echo $a['nama_ukm']; ?></td>
                    <td><?php echo $a['nim_mhs']; ?></td>
                    <td><?php echo $a['nama_mhs']; ?></td>
                    <td><?php echo $a['jk']; ?></td>
                    <td><?php echo $a['no_wa']; ?></td>
                    <td><?php echo $a['email']; ?></td>
                    <td><?php echo $a['nama_prodi']; ?></td>
                    <td><?php echo $a['angkatan']; ?></td>
                    <td><?php echo $a['alamat']; ?></td>
                    <td><?php echo $a['alasan']; ?></td>
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
</div>
<!-- ./wrapper -->
</body>
</html>
