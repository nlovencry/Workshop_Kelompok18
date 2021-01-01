<?php
	
	include '../koneksi.php';

	$nim_mhs	= $_POST['nim_mhs'];
	$id_prodi	= $_POST['id_prodi'];
	$nama_mhs	= $_POST['nama_mhs'];
	$jk			= $_POST['jk'];
	$no_wa		= $_POST['no_wa'];
	$email		= $_POST['email'];
	$angkatan	= $_POST['angkatan'];
	$alamat		= $_POST['alamat'];

	mysqli_query($db, "UPDATE tb_mahasiswa SET nim_mhs='$nim_mhs', id_prodi='$id_prodi', nama_mhs='$nama_mhs', jk='$jk', no_wa='$no_wa', email='$email', angkatan='$angkatan', alamat='$alamat' WHERE nim_mhs='$nim_mhs'");
	header("location:profile-mhs.php");

?>