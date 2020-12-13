<!doctype html>
    <html>
        <head>
            <title> Membuat CRUD 
             <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <div class="judul">
                <h1>Membuat CRUD dengn PHP dan MySQL</h1>
                <h2>Menampilkan Data dari Database</h2>
            </div>
                <br>
                    <a href="index.php">Lihat Semua Data</a>
                <br>
            <h3>Edit Data</h3>
            <?php 
                include "koneksi.php";
                    $id = $_GET['id'];
                    $query_mysql = mysqli_query($koneksi,"select * from user where id = '$id'");
                    $nomor = 1;
                while($data = mysqli_fetch_array($query_mysql)){
            ?>
                <form action="update.php" method="POST">
                    <table>
                        <tr>
                            <td>Nama UKM</td>
                            <td><input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                            <input type="text" name="nama-ukm" value="<?php echo $data['nama-ukm'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Ketua UKM</td>
                            <td><input type="text" name="nama-ketua-ukm" value="<?php echo $data['nama-ketua-ukm'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Wakil Ketua UKM</td>
                            <td><input type="text" name="nama-wakil-ketua-ukm" value="<?php echo $data['nama-wakil-ketua-ukm'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Wakil Ketua UKM</td>
                            <td><input type="text" name="nama-wakil-ketua-ukm" value="<?php echo $data['nama-wakil-ketua-ukm'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Sekretaris 1 UKM</td>
                            <td><input type="text" name="nama-sekretaris1-ukm" value="<?php echo $data['nama-sekretaris1-ukm'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Sekretaris 2 UKM</td>
                            <td><input type="text" name="nama-sekretaris2-ukm" value="<?php echo $data['nama-sekretaris2-ukm'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Bendahara 1 UKM</td>
                            <td><input type="text" name="nama-bendahara1-ukm" value="<?php echo $data['nama-bendahara1-ukm'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Bendahara 1 UKM</td>
                            <td><input type="text" name="nama-bendahara1-ukm" value="<?php echo $data['nama-bendahara1-ukm'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Visi UKM</td>
                            <td><input type="text" name="visi-ukm" value="<?php echo $data['visi-ukm'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Misi UKM</td>
                            <td><input type="text" name="misi-ukm" value="<?php echo $data['misi-ukm'] ?>">
                            </td>
                        </tr>
                            <td></td>
                            <td>
                            <input type="submit" value="simpan">
                            </td>
                        </tr>
                    </table>
                </form>
            <?php } ?>  
    </body>
</html>