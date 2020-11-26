<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan PHP dan MySQL - Menampilkan Data dari Database</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<div class="judul">
		<h1>Membuat CRUD dengan PHP MySQL</h1>
		<h2>Menampilkan Data dari Database</h2>
	</div>
	<br>
	<?php 
		if (isset($_GET['pesan'])) {
			$pesan = $_GET['pesan'];
			if ($pesan == "input") {
				echo "Data Berhasil di Input";
			}elseif($pesan == 'update') {
				echo "Data Berhasil di Update";
			}elseif ($pesan == 'hapus') {
				echo "Data Berhasil di Hapus";
			}
		}
	?>
	<br>
	<a href="input.php" class="tombol"> +Tambah Data</a>

	<h3>Data User</h3>
	<table>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Opsi</th>
		</tr>
		<tr>
			<?php
			include 'koneksi.php';
			$query = mysql_query($db, "SELECT * FROM tb_user");
			$nomor = 1;
			while ($data = mysqli_fetch_array($query)) {
			?>
				<tr>
					<td><?php echo $nomor++; ?></td>
					<td><?php echo $data['nama_user']; ?></td>
					<td><?php echo $data['alamat_user']; ?></td>
					<td><?php echo $data['pekerjaan_user']; ?></td>
					<td>
						<a href="edit.php?id_user<?php echo $data['id_user']; ?>" class="edit">Edit</a>
						<a href="hapus.php?id_user<?php echo $data['id_user']; ?>" class="hapus">Hapus</a>
					</td>
				</tr>
			<?php
			}
			?>
		</tr>
	</table>
</body>
</html>