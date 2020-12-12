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
		<h3>Edit Data</h3>
		<?php
		include 'koneksi.php';
		$id = $_GET['id'];
		$query = mysqli_query($db, "SELECT * FROM tb_user WHERE id='$id'");
		$nomor = 1;
		while ($data = mysqli_fetch_array($query)) {
		?>
		<table border="0" class="table2">
			<form action="update.php" method="POST">
				<tr>
					<td colspan="3"><input type="hidden" name="id" value="<?php echo $data['id']; ?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><textarea name="alamat" cols="22"><?php echo $data['alamat']; ?></textarea></td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td>:</td>
					<td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan']; ?>"></td>
				</tr>
				<tr>
					<td colspan="3" align="right">
						<input type="submit" value="Update">
					</td>
				</tr>
			</form>
		</table>
		<?php } ?>
	</div>
</body>
</html>