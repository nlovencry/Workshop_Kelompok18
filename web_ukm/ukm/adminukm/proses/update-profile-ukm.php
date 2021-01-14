<?php
	include '../../koneksi.php';

	$id_ukm 		= $_POST['id_ukm'];
	$nama_ukm 		= htmlspecialchars($_POST['nama_ukm'], ENT_QUOTES);
	$deskripsi_ukm	= htmlspecialchars($_POST['deskripsi_ukm'], ENT_QUOTES);
	$visi_ukm		= htmlspecialchars($_POST['visi_ukm'], ENT_QUOTES);
	$link_ytb		= htmlspecialchars($_POST['link_ytb'], ENT_QUOTES);
	$misi_ukm		= $_POST['misi_ukm'];

	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','JPG','PNG','JPEG');
	$filename = $_FILES['logo']['name'];
	$ukuran = $_FILES['logo']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$ekstensi) ) {
		echo "<script>alert('Ekstensi Tidak Diperbolehkan!'); location='../pecah/edit-profile';</script>";
	}else{
		if($ukuran < 10440700){		
			$logo_ukm = $rand.'_'.$filename;
			move_uploaded_file($_FILES['logo']['tmp_name'], '../../gambar/logo/'.$rand.'_'.$filename);
			mysqli_query($db, "UPDATE tb_ukm SET nama_ukm='$nama_ukm', deskripsi_ukm='$deskripsi_ukm', visi_ukm='$visi_ukm', link_ytb='$link_ytb', misi_ukm='$misi_ukm', logo_ukm='$logo_ukm' WHERE id_ukm='$id_ukm'");
			header("location:../pecah/profile-ukm");
		}else{
			echo "<script>alert('Ukuran Foto Tidak Boleh Lebih dari 1MB!'); location='../pecah/edit-profile';</script>";
		}
	}

?>