<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// update data ke database
mysqli_query($db,"UPDATE tb_user SET nama='$username', nim='$password' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../pecah/dt-user.php");
 
