<?php

	include '../koneksi.php';
	session_start();
	
	$nim_mhs	= $_SESSION['nim_mhs'];
	$id_ukm		= $_GET['id_ukm'];
	mysqli_query($db, "DELETE FROM tb_pendaftaran WHERE nim_mhs='$nim_mhs' AND id_ukm='$id_ukm'");
	header("location:profile-mhs");

?>