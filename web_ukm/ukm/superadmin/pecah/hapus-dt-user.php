<?php
//koneksi database
include 'koneksi.php';

//menangkap data id yangdi kirim dari url
$id = $_GET['id'];

//menghapus data dari database
mysqli_query($koneksi, "delete from user where id='$id'");

//mengalihkan halaman kembali ke dt-user
header("location:dt-user.php?pesan=hapus");
?>