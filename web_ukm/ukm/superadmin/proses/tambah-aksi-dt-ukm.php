<?php
	include '../../koneksi.php';

	$nama_ukm 		= $_POST['nama_ukm'];
	$deskripsi_ukm  = $_POST['deskripsi_ukm'];

	$query = mysqli_query($db, "SELECT nama_ukm FROM tb_ukm WHERE nama_ukm='$nama_ukm'");
	$cekdata = mysqli_num_rows($query);

	if ($cekdata == 1) {
		echo "<script>alert('Data Sudah Ada!'); location='../pecah/tambah-dt-ukm.php';</script>";
	}else{
		mysqli_query($db, "INSERT INTO tb_ukm VALUES(''.'0','$nama_ukm','$deskripsi_ukm','','','')");
		header("location:../pecah/dt-ukm.php");
	}
?>