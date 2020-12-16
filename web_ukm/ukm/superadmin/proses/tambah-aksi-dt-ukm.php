<?php
	include '../../koneksi.php';

	$nama_ukm 		= $_POST['nama_ukm'];
	$deskripsi_ukm  = $_POST['deskripsi_ukm'];

	mysqli_query($db, "INSERT INTO tb_ukm VALUES('','','$nama_ukm','$deskripsi_ukm','','','','','','','','','')");
	header("location:../pecah/dt-ukm.php");

	// $cekdata = mysqli_num_rows(mysqli_query($db, "SELECT nama_ukm FROM tb_ukm WHERE nama_ukm='$nama_ukm'"));
	// if ($cekdata > 0) {
	// 	print_r($_POST);
	// 	// echo "<script>alert('Data Sudah Ada!'); location:'../pecah/dt-ukm.php';</script>";
	// }else{
	// 	mysqli_query($db, "INSERT INTO tb_ukm VALUES('','','$nama_ukm','$deskripsi_ukm','','','','','','','','','')");
	// }
	// print_r($_POST);
	// header("location:../pecah/dt-ukm.php");
?>