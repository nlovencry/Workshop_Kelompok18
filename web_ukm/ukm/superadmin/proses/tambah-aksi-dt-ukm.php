<?php
	include '../../koneksi.php';

	$nama_ukm = $_POST['nama_ukm'];
	$deskripsi_ukm = $_POST['deskripsi_ukm'];

	mysqli_query($db,"INSERT INTO tb_ukm VALUES('','$nama_ukm','$deskripsi_ukm','','','','','','','','','')");
	header("location:../pecah/dt-ukm.php");
	
?>
