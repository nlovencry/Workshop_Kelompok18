<?php
	include '../../koneksi.php';

	$nama_ukm = $_POST['nama_ukm'];
	$deskripsi_ukm = $_POST['deskripsi_ukm'];
	$ceknama_ukm =mysql_num_rows(mysql_query("SELECT nama_ukm FROM tb_ukm WHERE nama_ukm='$_POST[nama_ukm]'"));
	$cekdeskripsi_ukm =mysql_num_rows(mysql_query("SELECT deskripsi_ukm FROM tb_ukm WHERE nama_ukm='$_POST[deskripsi_ukm]'"));
	
	if($cek>0){
		$_SESSION['pesan']="Terdapat Data Duplikat.";
		
	}else{
		//query insert dijalankan
	}

	mysqli_query($db,"INSERT INTO tb_ukm VALUES('','$nama_ukm','$deskripsi_ukm','','','','','','','','','')");
	header("location:../pecah/dt-ukm.php");
	
?>
