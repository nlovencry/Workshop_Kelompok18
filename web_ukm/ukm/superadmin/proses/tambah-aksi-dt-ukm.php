<?php
	include '../../koneksi.php';

	$nama_ukm = $_POST['nama_ukm'];
	$deskripsi_ukm = $_POST['deskripsi_ukm'];

	$sql = "SELECT * FROM tbl_ukm WHERE username='$nama_ukm' ";
	$sql = "SELECT * FROM tbl_ukm WHERE username='$deskripsi_ukm' ";
	$query = mysql_query($db) or die (mysql_error());
if(mysql_num_rows($query) > 0){

	mysqli_query($db, "INSERT INTO tb_ukm VALUES('','$nama_ukm','$deskripsi_ukm')");
	
	} else {
	header("location:../pecah/dt-ukm.php");
	
    $sql = "INSERT INTO tb_ukm('nama_ukm', 'deskripsi_ukm', status) 
	VALUES('$nama_ukm','$deskripsi_ukm','0')";
	
	$query = mysql_query($db) or die (mysql_error());
	
	header("location:dt-ukm.php?hasil=sukses");
	}
	
?>