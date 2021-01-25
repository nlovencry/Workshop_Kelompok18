<!DOCTYPE html>
<html lang="en">

<?php include '../head.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <?php 
  session_start();
    // cek apakah yang mengakses halaman ini sudah login
      if ($_SESSION['status'] == 'Login') {
        if($_SESSION['level'] == '3'){
          echo "<script>alert('Anda tidak dapat mengakses halaman ini!'); location='../../../index'; </script>";
        }elseif($_SESSION['level'] == '2'){
          echo "<script>alert('Anda tidak dapat mengakses halaman ini!'); location='../../../index'; </script>";
        }
      }else{
        echo "<script>alert('Silahkan login terlebih dahulu!'); location='../../../login'; </script>";
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
            <h1 class="m-0 text-dark">Data Pendaftar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../../index">Home</a></li>
              <li class="breadcrumb-item active">Data Pendaftar</li>
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
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Anggota Baru UKM</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <a href="../proses/cetak-laporan" target="_blank" class="btn btn-success" style="margin-bottom: 15px;">Cetak Laporan</a>
                </div>
                <form method="post">
                  <div class="row">
                    <div class="col-md-10">
                      <select name="id_ukm" class="form-control" style="margin-bottom: 15px; ">
                        <?php
                           include '../../koneksi.php';
                           $data2 = mysqli_query($db, "SELECT * FROM tb_ukm");
                           while($key=mysqli_fetch_assoc($data2)) { 
                           echo"<option value='".$key['id_ukm']."'>".$key['nama_ukm']."</option>";
                           }
                        ?>
                      </select>
                    </div>  
                    <div class="col-md-2">
                      <button type="submit" name="submit" class="btn btn-primary">Lihat Data</button>
                    </div>
                  </div>
                </form>
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>No WA</th>
                    <th>UKM</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
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
                    <td><?php echo $a['nim_mhs']; ?></td>
                    <td><?php echo $a['nama_mhs']; ?></td>
                    <td><?php echo $a['no_wa']; ?></td>
                    <td><?php echo $a['nama_ukm']; ?></td>
                    <td>
                      <button type="button" class="btn btn-info" onclick="show(this)" data-tgl="<?=$a['tgl_pendaftaran']?>" data-nim="<?=$a['nim_mhs']?>" data-nama="<?=$a['nama_mhs']?>" data-jk="<?=$a['jk']?>" data-no="<?=$a['no_wa']?>" data-email="<?=$a['email']?>" data-prodi="<?=$a['nama_prodi']?>" data-angkatan="<?=$a['angkatan']?>" data-alamat="<?=$a['alamat']?>" data-alasan="<?=$a['alasan']?>" data-gambar="<?=$a['sim_online']?>">Detail</button>
                    </td>
                  </tr>
                  <?php
                  }
                  ?>
                  </tbody>
                </table>

                <div class="modal fade" id="detail">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Detail Mahasiswa</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label>Tanggal Pendaftaran</label>
                          <input type="date" id="tgl_pendaftaran" class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <label>Nomor Induk Mahasiswa</label>
                          <input type="text" id="nim_mhs" class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <label>Nama Mahasiswa</label>
                          <input type="text" id="nama_mhs" class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <input type="text" id="jk" class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <label>Nomor Whatsapp</label>
                          <input type="text" id="no_wa" class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" id="email" class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <label>Program Studi</label>
                          <input type="text" id="nama_prodi" class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <label>Angkatan</label>
                          <input type="text" id="angkatan" class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea id="alamat" class="form-control" disabled=""></textarea>
                        </div>
                        <div class="form-group">
                          <label>Alasan</label>
                          <textarea id="alasan" class="form-control" disabled=""></textarea>
                        </div>
                        <div class="form-group">
                          <label>SIM Online</label><br>
                          <img id="gambar" width="50%" height="50%">
                        </div>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>

                <script type="text/javascript">
                  function show(e){
                    $('#detail').modal();
                    $('#tgl_pendaftaran').val($(e).data('tgl'));
                    $('#nim_mhs').val($(e).data('nim'));
                    $('#nama_mhs').val($(e).data('nama'));
                    $('#jk').val($(e).data('jk'));
                    $('#no_wa').val($(e).data('no'));
                    $('#email').val($(e).data('email'));
                    $('#nama_prodi').val($(e).data('prodi'));
                    $('#angkatan').val($(e).data('angkatan'));
                    $('#alamat').val($(e).data('alamat'));
                    $('#alasan').val($(e).data('alasan'));
                    $('#gambar').attr('src', '../../gambar/sim/'+$(e).data('gambar'));
                  }
                </script>
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
