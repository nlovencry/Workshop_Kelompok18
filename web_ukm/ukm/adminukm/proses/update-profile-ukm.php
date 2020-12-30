<?php
	include '../../koneksi.php';

	$id_ukm 		= $_POST['id_ukm'];
	$nama_ukm 		= $_POST['nama_ukm'];
	$deskripsi_ukm	= $_POST['deskripsi_ukm'];
	$visi_ukm		= $_POST['visi_ukm'];
	$misi_ukm		= $_POST['misi_ukm'];

	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg');
	$filename = $_FILES['logo']['name'];
	$ukuran = $_FILES['logo']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$ekstensi) ) {
		echo "<script>alert('Ekstensi Tidak Diperbolehkan!'); location:'../pecah/profile-ukm.php#kegiatan';</script>";
	}else{
		if($ukuran < 1044070){		
			$logo_ukm = $rand.'_'.$filename;
			move_uploaded_file($_FILES['logo']['tmp_name'], '../../gambar/logo/'.$rand.'_'.$filename);
			mysqli_query($db, "UPDATE tb_ukm SET nama_ukm='$nama_ukm', deskripsi_ukm='$deskripsi_ukm', visi_ukm='$visi_ukm', misi_ukm='$misi_ukm', logo_ukm='$logo_ukm' WHERE id_ukm='$id_ukm'");
			header("location:../pecah/profile-ukm.php");
		}else{
			echo "<script>alert('Ukuran Foto Tidak Boleh Lebih dari 1MB!'); location:'../pecah/profile-ukm.php';</script>";
		}
	}

?>