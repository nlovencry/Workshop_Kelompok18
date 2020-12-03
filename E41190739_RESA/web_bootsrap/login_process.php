<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email = '$username'");
$data = mysqli_fetch_array($query);
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if ($username == $data['email']) {
	if ($password == $data['password']) {
		header("location:index.php?pesan=berhasil");
	}else{
		header("location:login.php?pesan=passwordsalah");
	}
}else{
	header("location:login.php?pesan=emailsalah");
}
?>