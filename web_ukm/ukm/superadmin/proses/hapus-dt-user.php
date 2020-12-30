<?php
	include '../../koneksi.php';
	$id_user = $_GET['id_user'];

	$hps = "DELETE FROM tb_user WHERE id_user='$id_user'";
	$q = $db->query($hps);

	if ($q == true) {
		mysqli_query($db, "UPDATE tb_ukm SET id_user='0'");
		header("location:../pecah/dt-user.php");
	}
	
?>