<?php
	include '../../koneksi.php';

	$id_kegiatan = $_GET['id_kegiatan'];

	mysqli_query($db, "DELETE FROM tb_kegiatan WHERE id_kegiatan='$id_kegiatan'");
	header("location:../pecah/profile-ukm.php#kegiatan");

?>