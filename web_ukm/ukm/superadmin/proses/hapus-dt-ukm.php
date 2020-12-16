<?php
include '../../koneksi.php';
$id_ukm = $_GET['id_ukm'];
mysqli_query($db, "delete from tb_ukm where id_ukm='$id_ukm'");
header("location:../pecah/dt-ukm.php?pesan=hapus");
?>
