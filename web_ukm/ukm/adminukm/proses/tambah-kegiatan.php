<?php 
	include '../../koneksi.php';
	
	$id_ukm = $_POST['id_ukm'];
	$nama_kegiatan = $_POST['nama_kegiatan'];
	$keterangan = $_POST['keterangan'];

	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['logo']['name'];
	$ukuran = $_FILES['logo']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	 
	if(!in_array($ext,$ekstensi) ) {
		echo "<script>alert('Ekstensi Tidak Diperbolehkan!'); location:'../pecah/profile-ukm.php#kegiatan';</script>";
	}else{
		if($ukuran < 1044070){		
			$foto_kegiatan = $rand.'_'.$filename;
			move_uploaded_file($_FILES['logo']['tmp_name'], '../../gambar/kegiatan/'.$rand.'_'.$filename);
			mysqli_query($db, "INSERT INTO tb_kegiatan VALUES('','$id_ukm','$nama_kegiatan','$keterangan','$foto_kegiatan')");
			header("location:../pecah/profile-ukm.php#kegiatan");
		}else{
			echo "<script>alert('Ukuran Foto Terlalu Besar!'); location:'../pecah/profile-ukm.php#kegiatan';</script>";
		}
	}

?>