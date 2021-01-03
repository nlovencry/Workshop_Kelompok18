<?php
include "header.php";

?>
<div class="container">
    <table class="table table-striped">
        <thead>
            <div>
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h2 class="m-0 text-dark">Data Mahasiswa</h2>
            </div>
            <tr>
                <th class="m-0 text-dark" >No</th>
                <th class="m-0 text-dark" >Nama</th>
                <th class="m-0 text-dark" >Jurusan</th>
                <th class="m-0 text-dark" >Program Study</th>
                <th class="m-0 text-dark" >Golongan</th>
                <th class="m-0 text-dark" >Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $sql = "select * from mahasiswa";
            $data = $konek->prepare($sql);
            $data->execute();
            while ($d = $data->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $d['nama_mhs'] ?></td>
                    <td><?= $d['jurusan']; ?></td>
                    <td><?= $d['prodi']; ?></td>
                    <td><?= $d['golongan']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $d['id_mhs'] ?>" class="btn btn-info">Edit</a>
                        <a href="aksi.php?p=hapus&id=<?= $d['id_mhs'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>