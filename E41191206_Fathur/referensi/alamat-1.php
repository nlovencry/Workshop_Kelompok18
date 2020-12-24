<?php 
  require'../header.php';

  $data_anggota = query("SELECT * FROM alamat_anggota WHERE id_anggota = '".$_SESSION['id_anggota']."'");
  $tampil = "";
  $read = "readonly";
  // if (isset($_POST['tambah'])) {
  //   $tampil = '';
//       $nama_rumah = mysqli_real_escape_string($conn,$_POST['nama']);
//       $alamat = mysqli_real_escape_string($conn,$_POST['alamat']);
//       $kec = mysqli_real_escape_string($conn,$_POST['kecamatan']);
//       $kab = mysqli_real_escape_string($conn,$_POST['kabupaten']);
//       $telp = mysqli_real_escape_string($conn,$_POST['telp']);
//       $anggota = $_SESSION['id_anggota'];
//       $sql="INSERT INTO alamat_anggota VALUES('','$nama_rumah','$alamat','$kec','$kab','$telp','$anggota')";
//       if ($rows = mysqli_query($conn,$sql) == true) {
//           echo"Berhasil";
//       }
//       else{
//           echo"gagal";
//           var_dump($rows);
//       }
  // }
  if (isset($_POST['simpan_alamat'])) {
        $id = intval($_POST['id_alamat1']);
        $nama_rumah = mysqli_real_escape_string($conn,$_POST['rumah1']);
        $alamat = mysqli_real_escape_string($conn,$_POST['alamat1']);
        $kec = mysqli_real_escape_string($conn,$_POST['kecamatan1']);
        $kab = mysqli_real_escape_string($conn,$_POST['kabupaten1']);
        $telp = mysqli_real_escape_string($conn,$_POST['telp1']);
        $anggota = $_SESSION['id_anggota'];

        $updateData = "UPDATE alamat_anggota SET nama_rumah = '$nama_rumah',alamat_lengkap = '$alamat',kecamatan = '$kec',kabupaten = '$kab',no_telp = '$telp' WHERE id_alamat = '$id' ";
        $queryUpdate = mysqli_query($conn,$updateData);
  }
  // Hapus Alamat
  if (isset($_POST['hapus_alamat'])) {
      $id = intval($_POST['hapus_alamat']);
      $hapusData = "DELETE FROM alamat_anggota WHERE id_alamat = '$id'";
      $queryDelete = mysqli_query($conn,$hapusData);
      if ($queryDelete == true) {
        echo"<script>alert('Data Berhasil Dihapus')</script>";
      }
  }
 ?>
  <section class="profil" id="profil">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row text-center mt-4 py-2 text-white title_profil">
          <div class="col-md-10">
            <span class="judul_profil">Alamat</span>  
          </div>
          <div class="col-md-2">
            <button class="btn btn-sm btn-primary" id="tambah_alamat" name="tambah_alamat" data-toggle="modal"><i class="fa fa-plus-circle text-white"></i>&nbspTambah</button>  
          </div>
          </div>
          <div class="row text-center">
          <form action="" class="col-md-12" method="post">
          <div class="table-responsive" id="table_alamat">
          <table class="table">
            <thead>
              <tr>
                <th width="30px;">No</th>
                <th width="100px;">Nama Rumah</th>
                <th width="370px;">Alamat Lengkap</th>
                <th width="80px;">Kecamatan</th>
                <th width="80px;">Kabupaten</th>
                <th width="100px;">No Telp</th>
                <th >Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $nomer= "1";
            $anggota = "SELECT no_telp FROM tbl_anggota WHERE id_anggota = '".$_SESSION['id_anggota']."'";
            $alamats = query("SELECT id_alamat,nama_rumah,alamat_lengkap,kecamatan,kabupaten,no_telp FROM alamat_anggota WHERE id_anggota = '".$_SESSION['id_anggota']."'");

              foreach ($alamats as $alamat) {
            ?>
            <tr>
                <td><?php echo $nomer ?></td>
                <td><?php echo $alamat['nama_rumah'] ?></td>
                <td><?php echo $alamat['alamat_lengkap'] ?></td>
                <td><?php echo $alamat['kecamatan'] ?></td>
                <td><?php echo $alamat['kabupaten'] ?></td>
                <td><?php echo $alamat['no_telp'] ?></td>
                <td>
                  <button type="button" class="btn btn-sm ubah_alamat btn-info col-md-12" name="ubah" id="<?php echo $alamat['id_alamat'] ?>">Ubah</button>
                  <button type="submit" class="btn btn-sm btn-danger col-md-12" name="hapus_alamat" value="<?php echo $alamat['id_alamat'] ?>">Hapus</button>
                </td>
                
            </tr>
            <?php
            $nomer++;
              }
            ?>
            </tbody>
            </table>
            </div>
          </form>
          </div>
        </div>
      <div class="col-md-2 offset-1">
      <div class="col-md-12 mt-4 py-2 text-center title_setting">
          <span class="judul_profil">Setting Akun</span>
      </div>
      <div class="col-md-12 pt-2">
          <ul class="menu_Setting text-center my-3">
            <li><a href="akun.php">Akun</a></li>
            <li><a href="profil-1.php">Profil</a></li>
            <li><a href="alamat-1.php" class="active">Alamat</a></li>
            <li><a href="rekening.php">Rekening</a></li>
            <li><a href="password.php">Ubah Password</a></li>
          </ul>
      </div>
      </div>
    </div>
  </section>


<!-- Modal Ubah Alamat -->
<div class="modal fade" id="ubah_modal">
<div class="modal-dialog ">
    <div class="modal-content p-3">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-2x fa-edit"></i>Ubah Alamat</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body body_ajax">
  <!-- Modal body from Tajax -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Insert -->
<div class="modal fade" id="add_modal" >
  <div class="modal-dialog">
    <div class="modal-content p-3">
    <div class="modal_header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title"><i class="fa fa-2x fa-plus-circle"></i>&nbsp;Tambah Alamat</h4>
    </div>
    <div class="modal-body">
      <form action="core_alamat.php" method="post" id="insert_form">
        <div class="form-group">
          <label for="nama_tambahId"><i class="fa fa-home"></i>&nbsp;Nama Rumah</label>
          <input type="text" id="nama_tambahId" name="nama_tambahName" class="form-control-sm form-control" required placeholder="Masukkan Nama Rumah">
        </div>
        <div class="form-group">
          <label for="alamat_tambahId"><i class="fa fa-address-book"></i>&nbsp;Alamat Lengkap</label>
          <textarea id="alamat_tambahId" name="alamat_tambahName" class="form-control-sm form-control" required placeholder="Masukkan Alamat Lengkap"></textarea>
        </div>
        <div class="form-group">
          <label for="kabupaten_tambahId"><i class="fa fa-address-book"></i>&nbsp;Kabupaten</label>
          <input type="text" id="kabupaten_tambahId" name="kabupaten_tambahName" class="form-control-sm form-control" required placeholder="Masukkan Kabupaten">
        </div>
        <div class="form-group">
          <label for="kecamatan_tambahId"><i class="fa fa-address-book"></i>&nbsp;Kecamatan</label>
          <input type="text" id="kecamatan_tambahId" name="kecamatan_tambahName" class="form-control-sm form-control" required placeholder="Masukkan Kecamatan">
        </div>
        <div class="form-group">
          <label for="telp_tambahId"><i class="fa fa-phone"></i>&nbsp;No Telp</label>
          <input type="number" id="telp_tambahId" name="telp_tambahName" class="form-control-sm form-control" required placeholder="Masukkan Nomer Telp ">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success" id="tambah_tambahId" name="tambah_tambahName" ><i class="fa fa-plus-circle"></i>&nbsp;Save</button>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
    </div>
    </div>
  </div>
</div>


 <?php 
  include'../footer.php';
  ?>