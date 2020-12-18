<?php
	include '../../koneksi.php';
	$id_user = $_GET['id_user'];

	mysqli_query($db, "delete from tb_user where id_user='$id_user'");
	header("location:../pecah/dt-user.php");
?>