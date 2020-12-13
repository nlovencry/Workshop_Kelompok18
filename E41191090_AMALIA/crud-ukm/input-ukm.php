<!doctype html>
    <html>
        <head>
            <title>Membuat CRUD dengan PHP dan MySQL - Menampilkan dari Data Database</title>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <div class="judul">
                <h1>Membuat CRUD dengan PHP dan MySQL</h1>
                <h2>Menampilkan dari Database</h2>
            </div>
            <br>
                <a href="index-ukm.php"> Lihat Semu Data</a>
            <br>
            <h3>Input Data Baru</h3>
            
            <form action="input-aksi-ukm.php" method="POST">
                <table>
                    <tr>
                        <td>Nama UKM</td>
                        <td><input type="text" name="nama_ukm"></td>
                    </tr>
                    <tr>
                        <td>Nama Ketua UKM</td>
                        <td><input type="text" name="nama_ketua_ukm"></td>
                    </tr>
                    <tr>
                        <td>Nama Wakil Ketua UKM</td>
                        <td><input type="text" name="nama_wakil_ketua_ukm"></td>
                    </tr>
                    <tr>
                        <td>Nama Sekretaris 1 UKM</td>
                        <td><input type="text" name="nama_sekretaris_1_ukm"></td>
                    </tr>
                    <tr>
                        <td>Nama Sekretaris 2 UKM</td>
                        <td><input type="text" name="nama_sekretaris_2_ukm"></td>
                    </tr>
                    <tr>
                        <td>Nama Bendahara 1 UKM</td>
                        <td><input type="text" name="nama_bendahara_1_ukm"></td>
                    </tr>
                    <tr>
                        <td>Nama Bendahara 2 UKM</td>
                        <td><input type="text" name="nama_bendahara_2_ukm"></td>
                    </tr>
                    <tr>
                        <td>Visi UKM</td>
                        <td><input type="text" name="visi_ukm"></td>
                    </tr>
                    <tr>
                        <td>Misi UKM</td>
                        <td><input type="text" name="misi_ukm"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="Simpan"></td>
                    </tr>
                </table>
            </form>
        </body>
    </html>