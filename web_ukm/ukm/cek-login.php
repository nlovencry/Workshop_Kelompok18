<?php
	
	session_start();
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = mysqli_query($db, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");

	if (mysqli_num_rows($login)>0) {
		$user = mysqli_fetch_array($login);

		if ($user['level'] == "1") {
			$_SESSION['id_user'] 	= $user['id_user'];
			$_SESSION['username'] 	= $username;
			$_SESSION['status']		= "Login";
			$_SESSION['level']		= "1";
			header("location:superadmin/pecah/dashboard-superadmin.php");
		}elseif ($user['level'] == "2") {
			$adminukm 		= mysqli_query($db, "SELECT tb_user.id_user, tb_user.username, tb_user.password, tb_ukm.id_ukm, tb_ukm.nama_ukm FROM tb_ukm INNER JOIN tb_user ON tb_ukm.id_user = tb_user.id_user WHERE tb_user.id_user=$user[id_user];");
			$data 		= mysqli_fetch_array($adminukm);
			$_SESSION['id_user'] 	= $data['id_user'];
			$_SESSION['id_ukm']		= $data['id_ukm'];
			$_SESSION['username'] 	= $username;
			$_SESSION['nama_ukm']	= $data['nama_ukm'];
			$_SESSION['status']		= "Login";
			$_SESSION['level']		= "2";

			header("location:adminukm/pecah/dashboard-adminukm.php");
		}else{
			echo "<script>alert('Silahkan login terlebih dahulu!'); location='login.php';</script>";
		}
	}else{
		echo "<script>alert('Username atau Password salah!'); location='login.php';</script>";
	}

?>