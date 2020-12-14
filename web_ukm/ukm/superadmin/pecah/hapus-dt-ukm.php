<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "delete from ukm where id='$id'");
header("location:dt-ukm.php?pesan=hapus");
?>