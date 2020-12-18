<?php
	include '../../koneksi.php';

	$id_ukm 	 = $_POST['id_ukm'];
	$nama_divisi = $_POST['nama_divisi'];
	$nama_co 	 = $_POST['nama_co'];

	mysqli_query($db, "INSERT INTO tb_divisi VALUES('','$id_ukm','$nama_divisi','$nama_co')");
	header("location:../pecah/dt-divisi.php");

?>