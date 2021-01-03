<?php
include "header.php";
?>

<div class="container">
    <form action="aksi.php?p=edit&id=<?php echo $_GET['id'] ?>" method="POST">
        <?php
        $no = 1;
        $sql = "select * from mahasiswa";
        $data = $konek->prepare($sql);
        $data->execute();
        $d = $data->fetch(PDO::FETCH_ASSOC);
        ?>
        <!-- <input type="hidden" name="xid" value="<?= $d['id_mhs']; ?>"> -->
        <div class="form-group">
            <input type="text" class="form-control" value="<?= $d['nama_mhs']; ?>" name="xnama" id="xnama">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" value="<?= $d['jurusan']; ?>" name="xjurusan" id="xjurusan">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" value="<?= $d['prodi']; ?>" name="xprodi" id="xprodi">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" value="<?= $d['golongan']; ?>" name="xgolongan" id="xgolongan">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="aksi.php?p=hapus&id=<?= $d['id_mhs'] ?>" class="btn btn-danger">Kembali</a>
    </form>

</div>