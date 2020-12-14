<?php
include '../../koneksi.php';
$nama_ukm = $_POST['nama_ukm'];
$ketua_ukm = $_POST['ketua_ukm'];

mysqli_query($db,"insert into tb_ukm values('','$nama_ukm','$ketua_ukm')");
header("location:../pecah/dt-ukm.php?pesan=input");
?>
