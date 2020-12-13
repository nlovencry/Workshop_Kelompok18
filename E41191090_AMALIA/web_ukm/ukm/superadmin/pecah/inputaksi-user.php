<?php
include 'koneksi.php';
$NAMAUSER = $_POST['NAMAUSER'];
$USERNAME = $_POST['USERNAME'];
$LEVEL = $_POST['LEVEL'];

mysqli_query($koneksi,"insert into user values('','$NAMAUSER','$USERNAME','$LEVEL')");
header("location:datauser.php?pesan=input");
?>