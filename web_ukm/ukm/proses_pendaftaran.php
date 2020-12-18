<?php 
    include "koneksi.php";
    $nama= $_POST['nama'];
    $nim= $_POST['nim'];
    $jk= $_POST['jk'];

	$sql1 = "INSERT INTO tb_mahasiswa VALUES('$nama','$nim','$jk')";
	$sql2 = "INSERT INTO tb_pendaftaran VALUES('$nama','$nim','$jk')";
	mysqli_query($conn,$sql1);
	mysqli_query($conn,$sql2);

	header('location:form-pendaftaran.php?sukses');
?>