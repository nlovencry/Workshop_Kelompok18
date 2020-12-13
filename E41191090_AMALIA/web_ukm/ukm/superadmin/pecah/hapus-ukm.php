<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "delete from user where id='$id'");
header("location:data-ukm.php?pesan=hapus");
?>