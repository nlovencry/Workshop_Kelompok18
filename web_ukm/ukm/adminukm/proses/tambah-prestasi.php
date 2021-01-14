<?php
	include '../../koneksi.php';

	$id_ukm 		= $_POST['id_ukm'];
	$nama_prestasi	= htmlspecialchars($_POST['nama_prestasi'], ENT_QUOTES);

	mysqli_query($db, "INSERT INTO tb_prestasi VALUES('','$id_ukm','$nama_prestasi')");
	header("location:../pecah/profile-ukm");

?>