<!DOCTYPE html>
<html>
<head>
    <title>Membuat CRUD dengan PHP dan MySQL - Menampilkan data dari database</title>
    <link rel="stylesheet" href="Style.css" type="text/css">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD dengan PHP dan MySQl</h1>
        <h2>Menampilkan dari database</h2>
    </div>
    <br>
    <a href="index.php">Lihat semua data</a>
    <br>
    <h3>Input data baru</h3>
    <form action="input-aksi.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>