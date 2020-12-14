<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi,"insert into user values('','$nama_ukm','$ketua_ukm')");
header("location:dt-user.php?pesan=input");
?>
