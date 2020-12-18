<?php
include '../../koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

	$query = mysqli_query($db, "SELECT username FROM tb_user WHERE username='$nama_user'");
	$cekdata = mysqli_num_rows($query);

	if ($cekdata == 1) {
		echo "<script>alert('Data Sudah Ada!'); location='../pecah/tambah-dt-user.php';</script>";
	}else{
		mysqli_query($db, "INSERT INTO tb_user VALUES('','0','$username','$password','','','')");
		header("location:../pecah/dt-user.php");
	}

?>
 