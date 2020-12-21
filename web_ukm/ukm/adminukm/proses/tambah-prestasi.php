<?php
	include '../../koneksi.php';

	$id_ukm 		= $_POST['id_ukm'];
	$nama_prestasi	= $_POST['nama_prestasi'];

	mysqli_query($db, "INSERT INTO tb_prestasi VALUES('','$id_ukm','$nama_prestasi')");
	header("location:../pecah/profile-ukm.php");

?>