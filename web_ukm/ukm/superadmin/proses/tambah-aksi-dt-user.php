<?php
include '../../koneksi.php';
	
	$id_ukm	  = $_POST['id_ukm'];
	$id_user  = $_POST['id_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];

   	$query = mysqli_query($db, "SELECT id_user FROM tb_ukm WHERE id_ukm='$id_ukm'");
	$cekdata = mysqli_num_rows($query);

	if ($cekdata != 0) {
		echo "<script>alert('Data Sudah Ada'); location:'../pecah/tambah-dt-user.php';</script>"
	}else{
		mysqli_query($db, "UPDATE tb_ukm SET('','$username','$password','2')");
		header("location:../pecah/dt-ukm.php");
?>


	