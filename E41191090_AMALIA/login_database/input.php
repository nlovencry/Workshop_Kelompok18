<!doctype html>
    <html>
        <head>
            <title>PHP dan MySQL - Menampilkan dari Data Database</title>
        </head>
        <body>
            <div class="judul">
                <h1>Membuat CRUD dengan PHP dan MySQL</h1>
                <h2>Menampilkan dari Database</h2>
            </div>
            <br>
                <a href="index.php"> Lihat Semu Data</a>
            <br>
            <h3>Input Data Baru</h3>
            
            <form action="input-aksi.php" method="POST">
                <table>
                    <tr>
                        <td>Id</td>
                        <td><input type="text" name="id"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="Simpan"></td>
                    </tr>
                </table>
            </form>
        </body>
    </html>