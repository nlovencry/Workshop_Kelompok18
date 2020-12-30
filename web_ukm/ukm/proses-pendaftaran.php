<?php

	include 'koneksi.php';

	$tgl_pendaftaran = $_POST['tgl_pendaftaran'];
	$nim_mhs = $_POST['nim_mhs'];
	$id_ukm = $_POST['id_ukm'];
	$alasan = $_POST['alasan'];

	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg');
	$filename = $_FILES['sim']['name'];
	$ukuran = $_FILES['sim']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	$query = mysqli_query($db, "SELECT nim_mhs FROM tb_pendaftaran WHERE nim_mhs='$nim_mhs'");
	$cekdata = mysqli_num_rows($query);

	if(!in_array($ext,$ekstensi) ) {
		echo "<script>alert('Extensi Tidak Diperbolehkan!'); location='form-pendaftaran.php';</script>";
	}else{
		if($ukuran < 1044070){		
			$sim = $rand.'_'.$filename;
			if ($cekdata == 2) {
				echo "<script>alert('Anda Tidak Boleh Mendaftar Lebih Dari 2 UKM!'); location='form-pendaftaran.php';</script>";
			}elseif($cekdata < 2){
				move_uploaded_file($_FILES['sim']['tmp_name'], 'gambar/sim/'.$rand.'_'.$filename);
				mysqli_query($db, "INSERT INTO tb_pendaftaran VALUES('','$tgl_pendaftaran','$nim_mhs','$id_ukm','$alasan','$sim')");
				// print_r($_POST);
				echo "<script>alert('Pendaftaran Berhasil!'); location='form-pendaftaran.php';</script>";
			}else{
				echo "<script>alert('Pendaftaran Gagal!'); location='form-pendaftaran.php';</script>";
			}
		}else{
			echo "<script>alert('Ukuran Foto Tidak Boleh Lebih dari 1MB!'); location='form-pendaftaran.php';</script>";
		}
	}

?>