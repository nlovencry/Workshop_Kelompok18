<?php
	include '../../koneksi.php';

	$nama_ukm 		= htmlspecialchars($_POST['nama_ukm'], ENT_QUOTES);
	$deskripsi_ukm  = htmlspecialchars($_POST['deskripsi_ukm'], ENT_QUOTES);
	$slug			= str_replace(" ", "-", $nama_ukm);

	$query = mysqli_query($db, "SELECT nama_ukm FROM tb_ukm WHERE nama_ukm='$nama_ukm'");
	$cekdata = mysqli_num_rows($query);

	if ($cekdata == 1) {
		echo "<script>alert('Data Sudah Ada!'); location='../pecah/dt-ukm';</script>";
	}else{
		mysqli_query($db, "INSERT INTO tb_ukm VALUES('','0','$nama_ukm','$deskripsi_ukm','','','','','$slug')");
		header("location:../pecah/dt-ukm");
	}
?>