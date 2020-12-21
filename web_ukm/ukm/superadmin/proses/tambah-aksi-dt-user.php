<?php
include '../../koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($db, "SELECT nama_ukm FROM tb_ukm WHERE nama_ukm='$nama_ukm'");
    $cekdat = mysqli_num_rows($query);
  
		mysqli_query($db, "INSERT INTO tb_user VALUES('','$username','$password','')");
		header("location:../pecah/dt-user.php");
  
?>


	$query = mysqli_query($db, "SELECT nama_ukm FROM tb_ukm WHERE nama_ukm='$nama_ukm'");
	$cekdata = mysqli_num_rows($query);

	if ($cekdata == 1) {
		echo ("location='../pecah/tambah-dt-ukm.php';</script>");
	}else{
		mysqli_query($db, "INSERT INTO tb_ukm VALUES('','0','$nama_ukm','$deskripsi_ukm','','','')");
		header("location:../pecah/dt-ukm.php");
