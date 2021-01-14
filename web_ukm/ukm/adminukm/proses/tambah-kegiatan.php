<?php 
	include '../../koneksi.php';
	
	$id_ukm = $_POST['id_ukm'];
	$nama_kegiatan = htmlspecialchars($_POST['nama_kegiatan'], ENT_QUOTES);
	$keterangan = htmlspecialchars($_POST['keterangan'], ENT_QUOTES);

	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','JPG','PNG','JPEG');
	$filename = $_FILES['foto']['name'];
	$ukuran = $_FILES['foto']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	 
	if(!in_array($ext,$ekstensi) ) {
		echo "<script>alert('Ekstensi Tidak Diperbolehkan!'); location='../pecah/profile-ukm#kegiatan';</script>";
	}else{
		if($ukuran < 10440700){		
			$foto_kegiatan = $rand.'_'.$filename;
			move_uploaded_file($_FILES['foto']['tmp_name'], '../../gambar/kegiatan/'.$rand.'_'.$filename);
			mysqli_query($db, "INSERT INTO tb_kegiatan VALUES('','$id_ukm','$nama_kegiatan','$keterangan','$foto_kegiatan')");
			header("location:../pecah/profile-ukm#kegiatan");
		}else{
			echo "<script>alert('Ukuran Foto Terlalu Besar!'); location='../pecah/profile-ukm';</script>";
		}
	}

?>