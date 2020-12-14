<?php
include'koneksi.php';
$nama_ukm = $_POST['nama_ukm'];
$ketua_ukm = $_POST['ketua_ukm'];
$pekerjaan = $_POST['pekerjaan'];
mysqli_query($koneksi,"insert into user values('','$nama_ukm','$ketua_ukm')");
header("location:index.php?pesan=input");
?>
