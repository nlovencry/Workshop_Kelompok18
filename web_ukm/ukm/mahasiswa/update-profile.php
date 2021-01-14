<?php
	
	include '../koneksi.php';
	session_start();


	$nim_mhs	= $_POST['nim_mhs'];
	$id_prodi	= $_POST['id_prodi'];
	$nama_mhs	= htmlspecialchars($_POST['nama_mhs'], ENT_QUOTES);
	$jk			= $_POST['jk'];
	$no_wa		= $_POST['no_wa'];
	$email		= htmlspecialchars($_POST['email'], ENT_QUOTES);
	$angkatan	= $_POST['angkatan'];
	$alamat		= htmlspecialchars($_POST['alamat'], ENT_QUOTES);
	$password	= md5($_POST['password']);

	$query = mysqli_query($db, "UPDATE tb_mahasiswa SET nim_mhs='$nim_mhs', id_prodi='$id_prodi', nama_mhs='$nama_mhs', jk='$jk', no_wa='$no_wa', email='$email', angkatan='$angkatan', alamat='$alamat' WHERE nim_mhs='$nim_mhs'");
    if ($query == true) {
    	$id_user = $_SESSION['id_user'];
    	$update = mysqli_query ($db, "UPDATE tb_user SET password = '$password' WHERE id_user='$id_user'");
    	echo "<script>alert('Update Profile Berhasil'); location='profile-mhs';</script>";
    }
    echo "<script>alert('Update Profile Gagal'); location='profile-mhs';</script>";

?>