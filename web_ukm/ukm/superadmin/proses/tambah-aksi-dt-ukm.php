<?php
include '../../koneksi.php';
$nama_ukm = $_POST['nama_ukm'];
$ketua_ukm = $_POST['ketua_ukm'];

mysqli_query($db,"insert into tb_ukm values('','$nama_ukm','$ketua_ukm')");
header("location:../pecah/dt-ukm.php?pesan=input");
if($db){
    header("location:../pecah/dt-ukm.php?pesan=input");
    }else{
        echo "Maaf, Data Anda Belum Tersimpan pada Database.";
        echo "<br><a href='dt-ukm.php'>Kembali Ke Data UKM</a>";
    }
?>
