<?php 
	include '../../koneksi.php';

	$id_struktur = $_GET['id_struktur'];

	mysqli_query($db, "DELETE FROM tb_struktur WHERE id_struktur='$id_struktur'");
	header("location:../pecah/detail-struktur");
?>