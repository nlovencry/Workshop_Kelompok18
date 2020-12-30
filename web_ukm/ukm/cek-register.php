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

	$cekuser = mysqli_query($db, "SELECT username FROM tb_user WHERE username='$username'");
	$ceknim  = mysqli_query($db, "SELECT nim_mhs FROM tb_mahasiswa WHERE nim_mhs='$nim'");
	$cek  = mysqli_num_rows($cekuser);
	$cek2 = mysqli_num_rows($ceknim);

	if ($cek == 0) {
		if ($cek2 == 0) {
			$insert = "INSERT INTO tb_user VALUES('','$username','$password',3)";
			$query = $db->query($insert);
			if ($query == true) {
				$get_last_id = mysqli_fetch_array($db->query('SELECT max(id_user) as last_id FROM tb_user'))['last_id'];
				mysqli_query($db, "INSERT INTO tb_mahasiswa VALUES ('$nim', '$prodi', '$nama_lengkap', '$jk', '$no_wa', '$email', '$angkatan', '$alamat', '$get_last_id')");
				echo "<script>alert('Berhasil Membuat Akun! Silahkan Login'); location='login.php';</script>";
			}else{
				echo("<script>alert('Gagal Membuat Akun!'); location='register.php';</script>");
			}
		}else{
			echo "<script>alert('NIM Sudah Terdaftar!'); location='register.php';</script>";
		}
	}else{
		echo "<script>alert('Username Sudah Terdaftar!'); location='register.php';</script>";
	}
	
?>