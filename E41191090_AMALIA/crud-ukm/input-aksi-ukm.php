<?php

    include 'koneksi-ukm.php';
        $nama_ukm = $_POST['nama_ukm'];
        $nama_ketua_ukm = $_POST['nama_ketua_ukm'];
        $nama_waki_ketua_ukm = $_POST['nama_wakil_ketua_ukm'];
        $nama_sekretaris_1_ukm = $_POST['nama_sekretaris_1_ukm'];
        $nama_sekretaris_2_ukm = $_POST['nama_sekretaris_2_ukm'];
        $nama_bendahara_1_ukm = $_POST['nama_bendahara_1_ukm'];
        $nama_bendahara_2_ukm = $_POST['nama_bendahara_2_ukm'];
        $visi_ukm = $_POST['visi_ukm'];
        $misi_ukm = $_POST['misi_ukm'];

mysqli_query($koneksi,"insert into user values 
('','$nama_ukm','$nama_ketua_ukm','$nama_waki_ketua_ukm','$nama_sekretaris_1_ukm',
'$nama_sekretaris_2_ukm','$nama_bendahara_1_ukm','$nama_bendahara_2_ukm','$visi_ukm','$misi_ukm')");
header("location:index-ukm.php?pesan=input");

?>