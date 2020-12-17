<?php
include '../../koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

	mysqli_query($db, "INSERT INTO tb_ukm VALUES('','','$nama_user','$deskripsi_ukm','','','','','','','','','')");
	header("location:../pecah/dt-user.php");

	$cekdata = mysqli_num_rows(mysqli_query($db, "SELECT nama_user FROM tb_user WHERE nama_user='$nama_user'"));
	if ($cekdata > 0) {
	print_r($_POST);
		echo "<script>alert('Data Sudah Ada!'); location:'../pecah/dt-user.php';</script>";
	}else{
		mysqli_query($db, "INSERT INTO tb_ukm VALUES('','','$nama_user','$deskripsi_user','','','','','','','','','')");
	}
	print_r($_POST);
	header("location:../pecah/dt-user.php");
?>
 