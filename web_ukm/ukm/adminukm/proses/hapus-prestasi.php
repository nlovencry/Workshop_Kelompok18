<?php 
	include '../../koneksi.php';

	$id_prestasi = $_GET['id_prestasi'];

	mysqli_query($db, "DELETE FROM tb_prestasi WHERE id_prestasi='$id_prestasi'");
	header("location:../pecah/profile-ukm");
?>