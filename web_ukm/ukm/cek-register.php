<?php
	
	include 'koneksi.php';

	$nim = $_POST["nim_mhs"];
	$prodi = $_POST["id_prodi"];
	$nama_lengkap = $_POST["nama_mhs"];
	$jk = $_POST["jk"];
	$no_wa = $_POST["no_wa"];
	$email = $_POST['email'];
	$angkatan = $_POST["angkatan"];
	$alamat = $_POST["alamat"];
	$username = $_POST["username"];
	$password = md5($_POST["password"]);

	$cekdata = mysqli_query($db, "SELECT * FROM tb_mahasiswa WHERE nim_mhs='$nim' AND username='$username'");
	$cek = mysqli_num_rows($cekdata);

	if ($cek == 0) {
		mysqli_query($db, "INSERT INTO tb_mahasiswa VALUES ('$nim', '$prodi', '$nama_lengkap', '$jk', '$no_wa', '$email', '$angkatan', '$alamat', '$username', '$password')");
		echo "<script>alert('Berhasil Membuat Akun! Silahkan Login'); location='login.php';</script>";
	}
	else {
		echo "<script>alert('NIM atau Username Sudah Terdaftar!'); location='register.php';</script>";
	}

	
?>