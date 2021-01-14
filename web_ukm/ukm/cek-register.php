<?php
	
	include 'koneksi.php';

	$nim = htmlspecialchars($_POST["nim_mhs"], ENT_QUOTES);
	$prodi = $_POST["id_prodi"];
	$nama_lengkap = htmlspecialchars($_POST["nama_mhs"], ENT_QUOTES);
	$jk = $_POST["jk"];
	$no_wa = $_POST["no_wa"];
	$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
	$angkatan = $_POST["angkatan"];
	$alamat = htmlspecialchars($_POST["alamat"], ENT_QUOTES);
	// $username = htmlspecialchars($_POST["username"], ENT_QUOTES);
	$password = md5($_POST["password"]);

	$ceknim  = mysqli_query($db, "SELECT nim_mhs FROM tb_mahasiswa WHERE nim_mhs='$nim'");
	$cek2 = mysqli_num_rows($ceknim);

	if ($cek2 == 0) {
		$insert = "INSERT INTO tb_user VALUES('','$nim','$password',3)";
		$query = $db->query($insert);
			if ($query == true) {
				$get_last_id = mysqli_fetch_array($db->query('SELECT max(id_user) as last_id FROM tb_user'))['last_id'];
				mysqli_query($db, "INSERT INTO tb_mahasiswa VALUES ('$nim', '$prodi', '$nama_lengkap', '$jk', '$no_wa', '$email', '$angkatan', '$alamat', '$get_last_id')");
				echo "<script>alert('Berhasil Membuat Akun! Silahkan Login'); location='login';</script>";
			}else{
				echo("<script>alert('Gagal Membuat Akun!'); location='register';</script>");
			}
		}else{
			echo "<script>alert('NIM Sudah Terdaftar!'); location='register';</script>";
		}
	
?>