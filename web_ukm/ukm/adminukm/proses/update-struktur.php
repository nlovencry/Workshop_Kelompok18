<?php
	include '../../koneksi.php';

	$id_struktur = $_POST['id_struktur'];
	$id_ukm = $_POST['id_ukm'];
	$nama_mhs = $_POST['nama_mhs'];
	$id_jabatan = $_POST['id_jabatan'];
	$id_prodi = $_POST['id_prodi'];
	$angkatan = $_POST['angkatan'];

	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['foto']['name'];
	$ukuran = $_FILES['foto']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$ekstensi) ) {
		echo "<script>alert('Ekstensi Tidak Diperbolehkan!'); location:'../pecah/tambah-struktur.php';</script>";
	}else{
		if($ukuran < 1044070){		
			$foto = $rand.'_'.$filename;
			move_uploaded_file($_FILES['foto']['tmp_name'], '../../gambar/struktur/'.$rand.'_'.$filename);
			mysqli_query($db, "UPDATE tb_struktur SET('','$id_ukm','$nama_mhs','$id_jabatan','$id_prodi','$angkatan','$foto' WHERE id_struktur='$id_struktur')");
			header("location:../pecah/detail-struktur.php");
		}else{
			echo "<script>alert('Ukuran Foto Tidak Boleh Lebih dari 1MB!'); location:'../pecah/tambah-struktur.php';</script>";
		}
	}
?>