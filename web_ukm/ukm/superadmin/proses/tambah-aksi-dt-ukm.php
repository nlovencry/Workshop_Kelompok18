<?php
include 'koneksi.php';
$nama_ukm = $_POST['nama_ukm'];
$ketua_ukm = $_POST['ketua_ukm'];

mysqli_query($koneksi,"insert into user values('','$nama_ukm','$ketua_ukm')");
header("location:dt-ukm.php?pesan=input");
?>
