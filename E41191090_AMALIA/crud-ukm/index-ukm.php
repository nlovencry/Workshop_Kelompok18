<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style-ukm.css">
    <link 
</head>
<body>
    <div class="judul">
        <h1>CRUD DATA UKM</h1>
    </div>
    <br>
    <?php
    if(isset($_GET['pesan'])){
        $pesan=$_GET['pesan'];
        if($pesan=="input"){
            echo "Data berhasil diinput";
        } elseif ($pesan=="update") {
            echo "Data berhasil diupdate";
        } elseif ($pesan=="hapus") {
            echo "Data berhasil dihapus";
        }
    }
    ?>
        <br>
        <a href="input-ukm.php" class="tombol"> + Tambah Data Baru</a>
        <h3>Data UKM</h3>
        <table border="2" class="table">
            <tr>
                <th>No</th>
                <th>ID UKM</th>
                <th>Nama UKM</th>
                <th>Nama Ketua UKM</th>
                <th>Nama Wakil Ketua UKM</th>
                <th>Nama Sekretaris 1 UKM</th>
                <th>Nama Sekretaris 2 UKM</th>
                <th>Nama Bendahara 1 UKM</th>
                <th>Nama Bendahara 2 UKM</th>
                <th>Visi UKM</th>
                <th>Misi UKM</th>
                <th>LOGO UKM</th>
                <th>Opsi</th>
            </tr>
        <?php
            include "koneksi-ukm.php";
                $query_mysql = mysqli_query($koneksi,"select * from tb_ukm");
                $nomor = 1;
            while ($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['ID_UKM']; ?></td>
                <td><?php echo $data['NAMA_UKM']; ?></td>
                <td><?php echo $data['KETUA_UKM']; ?></td>
                <td><?php echo $data['WAKIL_UKM']; ?></td>
                <td><?php echo $data['SEKRETARIS1_UKM']; ?></td>
                <td><?php echo $data['SEKRETARIS2_UKM']; ?></td>
                <td><?php echo $data['BENDAHARA1_UKM']; ?></td>
                <td><?php echo $data['BENDAHARA2_UKM']; ?></td>
                <td><?php echo $data['VISI_UKM']; ?></td>
                <td><?php echo $data['MISI_UKM']; ?></td>
                <td><?php echo $data['LOGO_UKM']; ?></td>
                <td>
                    <a href="edit-ukm.php?id=<?php echo $data['id']; ?>" class="edit">Edit</a>
                    <a href="hapus-ukm.php?id=<?php echo $data['id']; ?>" class="hapus">Hapus</a>
                </td>
            </tr>
        <?php } ?>
        </table>
    </body>
</html>
