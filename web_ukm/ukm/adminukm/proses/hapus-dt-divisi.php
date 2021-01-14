<?php 
	include '../../koneksi.php';

	$id_divisi = $_GET['id_divisi'];

	mysqli_query($db, "DELETE FROM tb_divisi WHERE id_divisi='$id_divisi'");
	header("location:../pecah/dt-divisi");

?>