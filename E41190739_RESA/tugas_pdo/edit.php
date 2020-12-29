<?php 
include('library.php');
$lib = new Library();
if(isset($_GET['nim'])){
    $nim = $_GET['nim']; 
    $data_mhs = $lib->get_by_id($nim);
}
else
{
    header('Location: index.php');
}

if(isset($_POST['tombol_update'])){
    $nim = $_POST['nim'];
    $nama_mhs = $_POST['nama_mhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat']; 
    $status_update = $lib->update($nim,$nama_mhs,$prodi,$alamat);
    if($status_update)
    {
        header('Location:index.php');
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
                <h3>Update Data Mahasiswa</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <div class="form-group row">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                    <input type="hidden" name="nim" class="form-control" id="nim" value="<?php echo $data_mhs['nim']; ?>">
                    <input type="text" name="nim" class="form-control" id="nim" value="<?php echo $data_mhs['nim']; ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_mhs" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_mhs" class="form-control" id="nama_mhs" value="<?php echo $data_mhs['nama_mhs']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_mhs['prodi']; ?>" name="prodi" class="form-control" id="prodi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" id="alamat"><?php echo $data_mhs['alamat']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_update" class="btn btn-primary" value="Update">
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>