<?php 
include('library.php');
$lib = new Library();
if(isset($_POST['tombol_tambah'])){
    $nim = $_POST['nim'];
    $nama_mhs = $_POST['nama_mhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];

    $add_status = $lib->add_data($nim, $nama_mhs, $prodi, $alamat);
    if($add_status){
    header('Location: index.php');
    }
}
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Mahasiswa</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <div class="form-group row">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                    <input type="text" name="nim" class="form-control" id="nim">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_mhs" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_mhs" class="form-control" id="nama_mhs">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                    <input type="text" name="prodi" class="form-control" id="prodi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" id="alamat"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>