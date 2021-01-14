<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_user  = $_POST['id_user'];
$id_ukm	  = $_POST['id_ukm'];
$username = htmlspecialchars($_POST['username'], ENT_QUOTES);
$password = md5($_POST['password']);
 
// update data ke database
mysqli_query($db,"UPDATE tb_user SET username='$username', password='$password' WHERE id_user='$id_user'");
header("location:../pecah/dt-user");
 
