<?php 
	
	session_start();
	include 'koneksi.php';

	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = mysqli_query($db, "SELECT * FROM tb_user WHERE email = '$email'");
	$data = mysqli_fetch_array($query);
	if ($email == $data['email']) {
		if ($password == $data['password']) {
			header("location:index.php?pesan=berhasil");
		}else{
			header("location:login.php?pesan=passwordsalah");
		}
	}else{
		header("location:login.php?pesan=emailsalah");
	}

?>