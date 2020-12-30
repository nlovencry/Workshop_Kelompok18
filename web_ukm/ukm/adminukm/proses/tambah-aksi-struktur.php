<?php
	include '../../koneksi.php';

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

	$query = mysqli_query($db, "SELECT id_jabatan FROM tb_jabatan WHERE id_jabatan='$id_jabatan' AND id_ukm='$id_ukm'");
	$cekdata = mysqli_num_rows($query);

	if(!in_array($ext,$ekstensi) ) {
		echo "<script>alert('Ekstensi Tidak Diperbolehkan!'); location:'../pecah/tambah-struktur.php';</script>";
	}else{
		if($ukuran < 1044070){		
			$foto = $rand.'_'.$filename;
			if ($cekdata == 1) {
				echo "<script>alert('Data Sudah Ada!'); location='../pecah/tambah-struktur.php';</script>";
			}elseif($cekdata == 0){
				move_uploaded_file($_FILES['foto']['tmp_name'], '../../gambar/struktur/'.$rand.'_'.$filename);
				mysqli_query($db, "INSERT INTO tb_struktur VALUES('','$id_ukm','$nama_mhs','$id_jabatan','$id_prodi','$angkatan','$foto')");
				header("location:../pecah/detail-struktur.php");
			}else{
				echo "<script>alert('Ukuran Foto Tidak Boleh Lebih dari 1MB!'); location:'../pecah/tambah-struktur.php';</script>";
			}
		}
	}
?>