<?php
	include '../../koneksi.php';

	$id_ukm 	 = $_POST['id_ukm'];
	$nama_divisi = htmlspecialchars($_POST['nama_divisi'], ENT_QUOTES);
	$nama_co 	 = htmlspecialchars($_POST['nama_co'], ENT_QUOTES);

	mysqli_query($db, "INSERT INTO tb_divisi VALUES('','$id_ukm','$nama_divisi','$nama_co')");
	header("location:../pecah/dt-divisi");

?>