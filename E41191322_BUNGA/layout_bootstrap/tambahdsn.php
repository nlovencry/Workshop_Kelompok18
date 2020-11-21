<?php
	include 'koneksi.php';	

	$nidn = $_POST['nidn'];
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$ttl = $_POST['tl'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];

	mysqli_query($db, "INSERT INTO tb_dosen VALUES ('$nidn', '$nama', '$jk', '$ttl', '$alamat', '$no_telp')");
	header("location:datadsn.php")

?>