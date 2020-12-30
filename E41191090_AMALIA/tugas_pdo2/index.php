<?php
include "header.php";

?>
<div class="container">
    <a href="tambah.php" class="btn btn-outline-primary">+ Tambah Data</a> <br> <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $sql = "select * from user";
            $data = $konek->prepare($sql);
            $data->execute();
            while ($d = $data->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $d['username'] ?></td>
                    <td><?= $d['password']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $d['username'] ?>" class="btn btn-info btn-sm">Edit</a>
                        <a href="aksi.php?p=hapus&id=<?= $d['username'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>