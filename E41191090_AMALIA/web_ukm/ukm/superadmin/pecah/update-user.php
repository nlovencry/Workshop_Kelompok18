<?php
include 'koneksi.php';
$NAMAUSER = $_POST['NAMAUSER'];
$USERNAME = $_POST['USERNAME'];
$LEVEL = $_POST['LEVEL'];

mysqli_query($koneksi,"update user set NAMAUSER='$NAMAUSER',USERNAME='$USERNAME',LEVEL='$LEVEL where id='$id'");
header("location:index.php?pesan=update_user");
?>
