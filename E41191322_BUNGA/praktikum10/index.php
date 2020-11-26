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
	<?php 
		if (isset($_GET['pesan'])) {
			$pesan = $_GET['pesan'];
			if ($pesan == "input") {
				echo "<script>alert('Data Berhasil di Input')</script>";
			}elseif($pesan == 'update') {
				echo "<script>alert('Data Berhasil di Update')</script>";
			}elseif ($pesan == 'hapus') {
				echo "<script>alert('Data Berhasil di Hapus')</script>";
			}
		}
	?>
	<div class="container">
	<a href="input.php" class="tombol"> +Tambah Data</a>
		<h3>Data User</h3>
		<table border="1" class="table">
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
				$query = mysqli_query($db, "SELECT * FROM tb_user");
				$nomor = 1;
				while ($data = mysqli_fetch_array($query)) {
				?>
					<tr>
						<td><?php echo $nomor++; ?></td>
						<td><?php echo $data['nama']; ?></td>
						<td><?php echo $data['alamat']; ?></td>
						<td><?php echo $data['pekerjaan']; ?></td>
						<td align="center">
							<a href="edit.php?id=<?php echo $data['id']; ?>" class="edit">Edit</a>
							<a href="hapus.php?id=<?php echo $data['id']; ?>" class="hapus">Hapus</a>
						</td>
					</tr>
				<?php
				}
				?>
			</tr>
		</table>
	</div>
</body>
</html>