<?php
	include 'koneksi.php';	

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$ttl = $_POST['tl'];
	$alamat = $_POST['alamat'];
	$prodi = $_POST['prodi'];
	$no_telp = $_POST['no_telp'];

	mysqli_query($db, "INSERT INTO tb_mahasiswa VALUES ('$nim', '$nama', '$jk', '$ttl', '$alamat', '$prodi', '$no_telp')");
	header("location:datamhs.php")

?>