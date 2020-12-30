<?php
include "header.php";
?>
<div class="container">
    <form action="aksi.php?p=tambah" method="POST">
    
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Masukkan Nama" name="xnama" id="xnama">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Masukkan Jurusan" name="xjurusan" id="xjurusan">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Masukkan Program Study" name="xprodi" id="xprodi">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Masukkan Golongan" name="xgolongan" id="xgolongan">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="aksi.php?p=hapus&id=<?= $d['id_mhs'] ?>" class="btn btn-danger">Kembali</a>
    </form>
</div>
