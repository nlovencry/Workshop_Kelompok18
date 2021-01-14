<?php

	session_start();
	include 'koneksi.php';

	$tgl_pendaftaran = $_POST['tgl_pendaftaran'];
	$nim_mhs = $_POST['nim_mhs'];
	$id_ukm = $_POST['id_ukm'];
	$alasan = htmlspecialchars($_POST['alasan'], ENT_QUOTES);

	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','JPG','PNG','JPEG');
	$filename = $_FILES['sim']['name'];
	$ukuran = $_FILES['sim']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	$query = mysqli_query($db, "SELECT nim_mhs FROM tb_pendaftaran WHERE nim_mhs='$nim_mhs'");
	$cekdata = mysqli_num_rows($query);
	$duplikat = mysqli_query($db, "SELECT nim_mhs, id_ukm FROM tb_pendaftaran WHERE nim_mhs='$nim_mhs' AND id_ukm='$id_ukm'");
	$cekdata2 = mysqli_num_rows($duplikat);

	if(!in_array($ext,$ekstensi) ) {
		echo "<script>alert('Extensi Tidak Diperbolehkan!'); location='form-pendaftaran';</script>";
	}else{
		if($ukuran < 10440700){		
			$sim = $rand.'_'.$filename;
			if ($cekdata2 == 1) {
				echo "<script>alert('Anda Sudah terdaftar di UKM ini!'); location='form-pendaftaran';</script>";
			}elseif ($cekdata == 2) {
				echo "<script>alert('Anda Tidak Boleh Mendaftar Lebih Dari 2 UKM!'); location='form-pendaftaran';</script>";
			}elseif($cekdata < 2){
				if (isset($_SESSION['status'])){
					move_uploaded_file($_FILES['sim']['tmp_name'], 'gambar/sim/'.$rand.'_'.$filename);
					mysqli_query($db, "INSERT INTO tb_pendaftaran VALUES('','$tgl_pendaftaran','$nim_mhs','$id_ukm','$alasan','$sim')");
					echo "<script>alert('Pendaftaran Berhasil!'); location='mahasiswa/profile-mhs';</script>";
				}else{
					echo "<script>alert('Silahkan Login Terlebih Dahulu!'); location='login';</script>";
				}
			}
		}else{
			echo "<script>alert('Ukuran Foto Tidak Boleh Lebih dari 1MB!'); location='form-pendaftaran';</script>";
		}
	}

?>