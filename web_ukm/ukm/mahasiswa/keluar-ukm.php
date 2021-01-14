<?php

	include '../koneksi.php';
	session_start();
	
	$nim_mhs	= $_SESSION['nim_mhs'];
	$id_ukm		= $_GET['id_ukm'];
	mysqli_query($db, "DELETE FROM tb_pendaftaran WHERE nim_mhs='$nim_mhs' AND id_ukm='$id_ukm'");
	echo "<script>confirm('Apakah anda yakin akan keluar dari UKM?'); location='profile-mhs'; </script>"

?>