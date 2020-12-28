<?php 
include 'koneksi.php';
$nim = $_POST['nim'];
$tanggal = $_POST['tanggal'];
$ukm = $_POST['ukm'];
$alasan = $_POST['alasan'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:form-pendaftaran.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO tb_pendaftaran VALUES(NULL,'$nim','$tanggal','$ukm','$alasan','$xx')");
		header("location:form-pendaftaran.php?alert=berhasil");
	}else{
		header("location:form-pendaftaran.php?alert=gagal_ukuran");
	}
}