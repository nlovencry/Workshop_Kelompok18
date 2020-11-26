<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan PHP dan MySQL - Menampilkan Data dari Database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h1>Membuat CRUD dengan PHP MySQL</h1>
		<h2>Menampilkan Data dari Database</h2>
	</div>
	<div class="container">
		<a href="index.php" class="tombol">Lihat Semua Data</a>
		<br>
		<h3>Tambah Data Baru</h3>
		<table border="0" class="table2">
			<form action="input-aksi.php" method="POST">
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" required=""></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><textarea name="alamat" cols="22" required=""></textarea></td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td>:</td>
					<td><input type="text" name="pekerjaan" required=""></td>
				</tr>
				<tr>
					<td colspan="3" align="right"><input type="submit" value="Simpan"></td>
				</tr>
			</form>
		</table>
	</div>
</body>
</html>